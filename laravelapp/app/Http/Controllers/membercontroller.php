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

    public function  edit(Request $request)
    {
        $item = DB::table('membertb')
        ->where('id',$request->id)->first();
        return view('member.edit', ['form' => $item]);
    }
    public function update(Requwst $request)
    {
        $param = [
            'ID' => $request->ID,
            'name' => $request->name,
            'birthday' => $request->birthday,
            'age' => $request->age,
            'birthplace' => $request-> birthplace,
        ];
        DB::table('membertb')
        ->where('id', $request->id)
        ->update($param);
        return redirect('/member');
    }
    public function del(Request $request)
    {
        $item = DB::table('membertb')
        ->where('id',$request->id)->first();
        return view('member.del', ['form' => $item]);
    }
    public function remove(Request $request)
    {
        DB::table('membertb')
        ->where('id',$request->id)->delete();
        return redirect('/member');
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
        DB::table('membertb')->insert($param);
        return redirect('/member');


    }
}
