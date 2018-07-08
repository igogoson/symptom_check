<?php

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








Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware' => ['web','auth']], function (){

    Route::get('/diagnosis', function () {
        \Illuminate\Support\Facades\DB::table('stats')->where('id',1)->increment('logTimes');
        return view('layouts.mainsite.diagnosis');
    });



    Route::get('/home', function (){
        if (Auth::user()->admin == 0){
            return view('layouts.mainsite.diagnosis');
        }else{
            $users['users'] = \App\User::all();
            return view('adminHome',$users);
        }
    });
});
Route::get('/contact', function () {
    return view('layouts.mainsite.contact');
});

Route::get('/', 'AdminHomeController@index');
Route::get('/{id}', 'AdminHomeController@destroy')->name('admin.destroy');
Route::get('/update/{id}', 'AdminHomeController@update')->name('admin.update');
//Route::get('/contact', 'AdminHomeController@contact')->name('admin.contact');



