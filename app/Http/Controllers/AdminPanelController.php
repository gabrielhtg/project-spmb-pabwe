<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function getAdminPanel () {
        return view ('admin-panel.adminpanel');
    }
}
