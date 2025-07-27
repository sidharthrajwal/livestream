<?php

namespace App\Http\Controllers\Dasboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.userdashboard');
    }
}
