<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HotelController extends Controller
{
    public function home(Request $request)
    {
        return view('hotel.home');
    }

    public function find(Request $request)
    {

    return view('hotel.search',['check' => '']);
    }

    public function search(Request $request)
    {       
        //$item = Reserve::find($request->check);
        $item = Reserve::where('check', $request->check)->first();
        $param = ['check' => $request-> check, 'item'=>$item];
        return view('hotel.find', $param);
    }

    public function reserve(Request $request)
    {
        return view('hotel.reserve');
    }

}