<?php

namespace App\Http\Controllers;

use App\Models\Cryptocurrency;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function exchange()
    {
        $cryptocurrencies = Cryptocurrency::all();

        return view('exchange', compact('cryptocurrencies'));
    }

    public function faq()
    {
        return view('faq');
    }

    public function agreement()
    {
        return view('agreement');
    }

    public function contacts()
    {
        return view('contacts');
    }
    
}
