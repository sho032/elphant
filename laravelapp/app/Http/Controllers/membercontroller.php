<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class MemberController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from membertb');
        return view('member.index', ['items' => $items]);
    }

    public function add(Request $request){
        return view('member.add');
}

public function create(Request $request){
        $param=[
                'name'=>$request->name,
                'birthday'=>$request->birthday,
                'age'=> $request->age,
                'birthplace'=> $request->birthplace,
        
        ];
        DB::table('member')->insert($param);
        return redirect('/member');

}

}
