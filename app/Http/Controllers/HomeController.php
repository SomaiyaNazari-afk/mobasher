<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('products.dashboard');
    }
    public function view()
    {
        return view('products.icon');
    }
    public function show()
    {
        return view('products.map');
    }
    public function match()
    {
        return view('products.notifications');
    }
    public function math() {
        return view('products.typography');
    }
    public function book()
    {
        return view('products.upgrade');
    }
    public function note()
    {
        return view('products.user');
    }
    public function registered()
    {
        return view('products.registeration');
    }
}
