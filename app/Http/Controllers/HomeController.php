<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $promotionItems = Product::promotion()->get();

        $listItems = Product::orderBy('stock', 'DESC')->take(6)->get();

        return view('home', compact('promotionItems', 'listItems'));
    }
}
