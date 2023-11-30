<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPanelController extends Controller
{
    public function getAdminPanel () {
        $admin = Auth::user();

        $data = [
            'indexActive' => 0,
            'admin' => $admin,
        ];
        return view ('admin-panel.adminpanel', $data);
    }

    public function getDashboardPanel () {
        $admin = Auth::user();
        $data = [
            'indexActive' => 2,
            'admin' => $admin
        ];
        return view('admin-panel.dashboard_panel', $data);
    }

    public function getEditProfile () {
        return view ('admin-panel.edit_profile');
    }
}
