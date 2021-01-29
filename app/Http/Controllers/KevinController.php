<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KevinController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function about() {
        return view('pages/about');
    }

    public function product() {
        return view('pages/product');
    }

    public function store() {
        return view('pages/store');
    }
}
