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
        // Logic for updating general settings can be added here
        return redirect()->route('admin.settings.general.edit')->with('success', 'General settings updated successfully.');
    }

    public function editBusiness()
    {
        return view('admin.settings.business.page');
    }

    public function updateBusiness(Request $request)
    {
        // Logic for updating business settings can be added here
        return redirect()->route('admin.settings.business.edit')->with('success', 'Business settings updated successfully.');
    }

    public function editSite()
    {
        return view('admin.settings.site.page');
    }

    public function updateSite(Request $request)
    {
        // Logic for updating site settings can be added here
        return redirect()->route('admin.settings.site.edit')->with('success', 'Site settings updated successfully.');
    }

    public function editShipping()
    {
        return view('admin.settings.shipping.page');
    }

    public function updateShipping(Request $request)
    {
        // Logic for updating shipping settings can be added here
        return redirect()->route('admin.settings.shipping.edit')->with('success', 'Shipping settings updated successfully.');
    }

    public function editPayment()
    {
        return view('admin.settings.payment.page');
    }

    public function updatePayment(Request $request)
    {
        // Logic for updating payment settings can be added here
        return redirect()->route('admin.settings.payment.edit')->with('success', 'Payment settings updated successfully.');
    }

    public function editTax()
    {
        return view('admin.settings.tax.page');
    }

    public function updateTax(Request $request)
    {
        // Logic for updating tax settings can be added here
        return redirect()->route('admin.settings.tax.edit')->with('success', 'Tax settings updated successfully.');
    }

    public function editSecurity()
    {
        return view('admin.settings.security.page');
    }

    public function updateSecurity(Request $request)
    {
        // Logic for updating security settings can be added here
        return redirect()->route('admin.settings.security.edit')->with('success', 'Security settings updated successfully.');
    }

    public function editNotifications()
    {
        return view('admin.settings.notifications.page');
    }

    public function updateNotifications(Request $request)
    {
        // Logic for updating notification settings can be added here
        return redirect()->route('admin.settings.notifications.edit')->with('success', 'Notification settings updated successfully.');
    }

    public function editAdvanced()
    {
        return view('admin.settings.advanced.page');
    }

    public function updateAdvanced(Request $request)
    {
        // Logic for updating advanced settings can be added here
        return redirect()->route('admin.settings.advanced.edit')->with('success', 'Advanced settings updated successfully.');
    }
}
