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
        ->where('ID',$request->ID)->first();
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
        ->where('ID', $request->ID)
        ->update($param);
        return redirect('/member');
    }
    public function del(Request $request)
    {
        $item = DB::table('membertb')
        ->where('ID',$request->ID)->first();
        return view('member.del', ['form' => $item]);
    }
    public function remove(Request $request)
    {
        DB::table('membertb')
        ->where('ID',$request->ID)->delete();
        return redirect('/member');
    }

    public function add(Request $request) //add

    {

        return view('member.add');

    }



    public function create(Request $request)

    {

        $param=[

                'ID'=>$request->ID,

                'name'=>$request->name,

                'birthday'=>$request->birthday,

                'age'=> $request->age,

                'birthplace'=> $request->birthplace,

       

        ];

        // DB::insert('insert into membertb (ID, name, birthday, age, birthplace) values

        //  (:ID, :name, :birthday, :age, :birthplace)', $param);

        DB::table('membertb')->insert($param);

        return redirect('/member');

    }






    public function show(Request $request)

    {

        $ID = $request->ID;

        $item = DB::table('membertb')->where('ID', $ID)->first();

        return view('member.show', ['item' => $item]);

    }
}
