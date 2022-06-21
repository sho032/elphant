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

    return view('hotel.search',['cheak' => '']);
    }

    public function search(Request $request)
    {
        $cheak=$request -> cheak;
        $item = reserve::find($request->cheak);
        $param = ['cheak' => $request-> $item];

        return view('hotel.search', $param);
    }

}