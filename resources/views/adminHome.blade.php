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
                                <td><form action="{{route('admin.destroy',$user->id)}}" class="inline-it" method="">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <input class="btn btn-danger btn-xs" type="submit" value="Delete">
                                    </form></td>

                                <td>

                                    <a class="btn btn-primary btn-xs" data-toggle="modal" href="#modal-id-{{$user->id}}">Edit</a>
                                    <div class="modal fade" id="modal-id-{{$user->id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;
                                                    </button>
                                                    <h4 class="modal-title">Edit User Details</h4>
                                                </div>
                                                <div class="modal-body">


                                                    <form class="form-vertical" action="{{route('admin.update',$user->id)}}" method="" role="form" id="">
                                                        {{csrf_field()}}
                                                        {{method_field('put')}}
                                                        <div class="form-group">
                                                            <label for="subject">Name</label>
                                                            <input type="text" class="form-control" id="" name="name" placeholder="Input..." value="{{$user->name}}">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="type">Email</label>
                                                            <input type="email" class="form-control" id="" name="email" placeholder="Input..." value="{{$user->email}}">
                                                        </div>



                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                                                Close
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                                        </div>

                                                    </form>




                                                </div>

                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                </td>


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
