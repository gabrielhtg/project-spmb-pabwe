<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPanelController extends Controller
{
    public function getAdminPanel () {
        $admin = Auth::user();

        $data = [
            'indexActive' => 0,
            'profilePict' => $admin->profile_pict
        ];
        return view ('admin-panel.adminpanel', $data);
    }

    public function getDashboardPanel () {
        $admin = Auth::user();
        $data = [
            'indexActive' => 2,
            'profilePict' => $admin->profile_pict
        ];
        return view('admin-panel.dashboard_panel', $data);
    }
}
