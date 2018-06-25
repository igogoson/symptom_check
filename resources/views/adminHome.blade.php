@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="alert alert-success">
                           <p>You are logged in as Administrator!!</p>
                        </div>

                        <h3>Registered Members</h3>

                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th width="5">No.</th>
                                <th>Member Name</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                    <hr>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <strong>Users Registered Today</strong>
                                <strong> ===> </strong>
                                <span class="badge" style="background: blue; color: white">{{$UsersToday}} <strong>People</strong></span>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <strong>Users Registered This Month</strong>
                                <strong> ===> </strong>
                                <span class="badge" style="background: blue; color: white">{{$UsersThisMonth}} <strong>People</strong></span>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <strong>Users Registered This year</strong>
                                <strong> ===> </strong>
                                <span class="badge" style="background: blue; color: white">{{$UsersThisYear}} <strong>People</strong></span>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-body">
                                <strong>Times Diagnosis Module has been used</strong>
                                <strong> ===> </strong>
                                <span class="badge" style="background: blue; color: white">@foreach($times as $time) {{$time->logTimes}} <strong>Times</strong>@endforeach</span>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
