<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home',['cars' => Car::all()]);
    }
}
