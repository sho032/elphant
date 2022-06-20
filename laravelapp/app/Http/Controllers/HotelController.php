<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function home(Request $request)
    {
        return view('hotel.home');
    }

}
