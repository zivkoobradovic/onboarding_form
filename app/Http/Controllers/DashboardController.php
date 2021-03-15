<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard () {
        return redirect('/');
    }

    public function showManagers () {
        return view('show-managers');
    }
}
