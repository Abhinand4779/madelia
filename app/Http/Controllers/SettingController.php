<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    // Public endpoint: Get all settings formatted as a key-value pair object
    public function index()
    {
        try {
            \Illuminate\Support\Facades\DB::statement('ALTER TABLE site_settings MODIFY value LONGTEXT');
        } catch (\Exception $e) {}
        
        $settings = SiteSetting::all()->pluck('value', 'key');
        return response()->json($settings);
    }

    // Admin endpoint: Update a setting (or multiple settings)
    public function update(Request $request)
    {
        $validated = $request->validate([
            'settings' => 'required|array',
            'settings.*' => 'nullable|string'
        ]);

        foreach ($validated['settings'] as $key => $value) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return response()->json(['message' => 'Settings updated successfully']);
    }
}
