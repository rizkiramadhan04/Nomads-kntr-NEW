<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('pages.home');
    }

    public function detail() {
        return view('pages.detail');
    }

    public function checkout() {
        return view('pages.checkout');
    }

    public function success() {
        return view('pages.success');
    }

    public function dashboard() {
        return view('pages.Admin.dashboard');
    }
}
