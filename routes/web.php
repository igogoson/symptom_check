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

Route::get('/', function () {
    if (Auth::guest()){

        return view('layouts.mainsite.index');
    }elseif(Auth::user()->admin == 0){
        return view('layouts.mainsite.index');
    }else{

        $date = \Carbon\Carbon::now()->format('Y');
        $today = \Carbon\Carbon::now()->format('Y-m-d');
        $month  = \Carbon\Carbon::now()->format('m');

        //Users
        $UsersThisYear = \Illuminate\Support\Facades\DB::table('users')->whereYear('created_at', $date)->count();
        $UsersToday = \Illuminate\Support\Facades\DB::table('users')->whereDate('created_at', $today)->count();
        $UsersThisMonth = \Illuminate\Support\Facades\DB::table('users')->whereMonth('created_at', $month)->count();


            $users = \App\User::all();

            $times = \Illuminate\Support\Facades\DB::table('stats')->get();
            return view('adminHome',compact('users','UsersToday','UsersThisYear','UsersThisMonth','times'));
    }


});

Route::get('/contact', function () {
    return view('layouts.mainsite.contact');
});




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