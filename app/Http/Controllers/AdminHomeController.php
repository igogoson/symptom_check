<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->all());

        return back();
    }

    public function contact()
    {
        return view('layouts.mainsite.contact');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);

        $user->delete();

        return back();



//        $user->delete();
//        return redirect()->route('/');
    }
}
