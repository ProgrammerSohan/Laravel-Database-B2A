<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function test1(){
       // $user = DB::select('select * from users where id=?', [1]);
        $user = DB::select('select * from users');

        return view('test',compact('user'));

    }
}
