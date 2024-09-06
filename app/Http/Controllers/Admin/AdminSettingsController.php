<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminSettingsController extends Controller
{
    public function editGeneral()
    {
        return view('admin.settings.general.page');
    }

    public function updateGeneral(Request $request)
    {
        return;
    }
}
