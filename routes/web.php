<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user = DB::select('select * from users where id=?', [1]);

    dump("mysql", $user);

    return view('welcome');
});//http://localhost:8000/


Route::get('/test1',[TestController::class,'test1']);//http://localhost:8000/test1
















