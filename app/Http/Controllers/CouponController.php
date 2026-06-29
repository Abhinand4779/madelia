<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CouponController extends Controller
{
    // ADMIN ENDPOINTS
    
    public function index()
    {
        return response()->json(Coupon::orderBy('created_at', 'desc')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|unique:coupons,code',
            'discount_type' => 'required|in:percent,fixed',
            'discount_amount' => 'required|numeric|min:0',
            'visibility' => 'required|in:public,private',
            'expiry_date' => 'nullable|date',
            'is_active' => 'boolean'
        ]);

        $coupon = Coupon::create($validated);
        return response()->json(['message' => 'Coupon created successfully', 'coupon' => $coupon], 201);
    }

    public function update(Request $request, $id)
    {
        $coupon = Coupon::findOrFail($id);

        $validated = $request->validate([
            'code' => 'required|string|unique:coupons,code,'.$id,
            'discount_type' => 'required|in:percent,fixed',
            'discount_amount' => 'required|numeric|min:0',
            'visibility' => 'required|in:public,private',
            'expiry_date' => 'nullable|date',
            'is_active' => 'boolean'
        ]);

        $coupon->update($validated);
        return response()->json(['message' => 'Coupon updated successfully', 'coupon' => $coupon]);
    }

    public function destroy($id)
    {
        $coupon = Coupon::findOrFail($id);
        $coupon->delete();
        return response()->json(['message' => 'Coupon deleted successfully']);
    }

    // PUBLIC ENDPOINT

    public function validateCoupon(Request $request)
    {
        $request->validate([
            'code' => 'required|string'
        ]);

        $coupon = Coupon::where('code', $request->code)->first();

        if (!$coupon) {
            return response()->json(['message' => 'Invalid coupon code.'], 404);
        }

        if (!$coupon->is_active) {
            return response()->json(['message' => 'This coupon is no longer active.'], 400);
        }

        if ($coupon->expiry_date && Carbon::now()->greaterThan($coupon->expiry_date)) {
            return response()->json(['message' => 'This coupon has expired.'], 400);
        }

        return response()->json([
            'message' => 'Coupon applied successfully!',
            'coupon' => $coupon
        ]);
    }

    public function indexPublic()
    {
        $coupons = Coupon::where('is_active', true)
                         ->where('visibility', 'public')
                         ->where(function ($query) {
                             $query->whereNull('expiry_date')
                                   ->orWhere('expiry_date', '>=', Carbon::now()->toDateString());
                         })
                         ->get();
                         
        return response()->json($coupons);
    }
}
