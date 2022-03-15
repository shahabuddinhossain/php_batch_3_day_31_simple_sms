@extends('master.admin.master')

@section('title')
    Manage User
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Manage User</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <div class="table-responsive">
                        <table class="table mb-0 table-bordered table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="text-center">
                                    <a href="{{route('edit-user', ['id' => $user->id])}}" class="btn btn-success btn-sm  ">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('delete-user', ['id' => $user->id])}}" class="btn btn-danger btn-sm {{$user->id==1 ? 'disabled' : '' }}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
