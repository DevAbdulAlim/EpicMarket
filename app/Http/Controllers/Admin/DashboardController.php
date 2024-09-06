<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.page');
    }
    public function catalog()
    {
        return view('admin.catalog.page');
    }
    public function sales()
    {
        return view('admin.sales.page');
    }
    public function marketing()
    {
        return view('admin.marketing.page');
    }
    public function engagements()
    {
        return view('admin.engagements.page');
    }
    public function settings()
    {
        return view('admin.settings.page');
    }
}
