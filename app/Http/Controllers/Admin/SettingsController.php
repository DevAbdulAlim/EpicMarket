<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function editGeneral()
    {
        return view('admin.settings.general.page');
    }

    public function updateGeneral(Request $request)
    {
        return;
    }

    // Display the Business Settings page
    public function editBusiness()
    {
        // Return the static view for Business Settings
        return view('admin.settings.business.page');
    }

    // Handle the update of Business Settings
    public function updateBusiness(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'business_name' => 'required|string|max:255',
            'business_email' => 'required|email',
            'business_phone' => 'required|string|max:20',
            'business_address' => 'required|string|max:500',
            'return_policy' => 'required|string',
            'terms_of_service' => 'required|string',
            'privacy_policy' => 'required|string',
        ]);

        // In the future, this is where you would save the settings to the database.
        // For now, just simulate successful submission and return a success message.

        return redirect()->route('admin.settings.business.edit')->with('success', 'Business settings updated successfully.');
    }
}
