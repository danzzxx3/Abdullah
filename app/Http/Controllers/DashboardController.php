<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

class DashboardController extends Controller
{
    // hanya bisa diakses setelah login
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('dashboard', [
            'title' => 'Dashboard',
            'totalProducts' => Product::count(),
            'totalUsers' => User::count(),
        ]);
    }
}
