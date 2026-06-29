<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Mail\OrderShippedMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminOrderController extends Controller
{
    /**
     * Get a list of all orders.
     */
    public function index()
    {
        $orders = Order::orderBy('created_at', 'desc')->get();
        return response()->json($orders);
    }

    public function updateStatus(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        
        $validated = $request->validate([
            'status' => 'required|string|max:255',
        ]);

        $order->update(['status' => $validated['status']]);

        return response()->json(['message' => 'Status updated successfully', 'order' => $order]);
    }

    public function updateTracking(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        
        $validated = $request->validate([
            'tracking_provider' => 'required|string|max:255',
            'tracking_number' => 'required|string|max:255',
        ]);

        $order->update([
            'tracking_provider' => $validated['tracking_provider'],
            'tracking_number' => $validated['tracking_number'],
            'status' => 'Shipped' // Automatically update status to Shipped when tracking is provided
        ]);

        try {
            Mail::to($order->customer_email)->send(new OrderShippedMail($order));
        } catch (\Exception $e) {
            \Log::error("Failed to send tracking email: " . $e->getMessage());
        }

        return response()->json(['message' => 'Tracking updated successfully', 'order' => $order]);
    }

    public function invoice($id)
    {
        $order = Order::findOrFail($id);
        // Normally we'd generate a PDF using a package like barryvdh/laravel-dompdf
        // For MVP, we return invoice data to be rendered by JS on the frontend
        return response()->json([
            'invoice_number' => 'INV-' . str_pad($order->id, 6, '0', STR_PAD_LEFT),
            'order' => $order,
            'company_details' => [
                'name' => 'Astra Jewellery',
                'address' => '123 Diamond Street, NY',
            ]
        ]);
    }
}
