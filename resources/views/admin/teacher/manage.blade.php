@extends('master.admin.master')

@section('title')
    Manage Teacher
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Manage Teacher</h4>
                    <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                    <div class="table-responsive">
                        <table class="table mb-0">

                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Teachers Name</th>
                                <th>Code</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$teacher->name}}</td>
                                <td>{{$teacher->code}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>{{$teacher->mobile}}</td>
                                <td>{{$teacher->address}}</td>
                                <td>
                                    <img src="{{$teacher->image}}" alt="{{'Photo of Mr. '.$teacher->name}}" class="img-fluid img-thumbnail" width="50px">
                                </td>
                                <td>{{$teacher->status}}</td>
                                <td class="text-center">
                                    <a href="{{route('edit-teacher', ['id' => $teacher->id])}}" class="text-success btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('delete-teacher',['id' => $teacher->id])}}" class="text-danger btn-xs">
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
