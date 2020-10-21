<?php

use Illuminate\Support\Facades\Route;
use App\User;
use Illuminate\Http\Request;
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

Route::get('/api/auth/login', 'AuthController@index');
Route::post('/api/auth/aksilog', function(Request $request){
	$data = User::get();
	$data->username = $request->name;
	$data->password = $request->pass;



	return view('home',$data);
});