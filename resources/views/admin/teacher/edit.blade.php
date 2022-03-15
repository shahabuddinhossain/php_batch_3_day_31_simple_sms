@extends('master.admin.master')

@section('title')
    Update Teacher info
@endsection

@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Teacher Form</h4>

                    <h3 class="title text-center text-danger">{{Session::get('message')}}</h3>

                    <form action="{{route('update-teacher',['id' => $teacher->id ])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Teacher's name</label>
                            <div class="col-sm-9">
                                <input type="text" name="name" value="{{$teacher->name}}" class="form-control" id="horizontal-firstname-input" >
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" value="{{$teacher->email}}" class="form-control" id="horizontal-email-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4"> {{--Form Group start--}}
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                                <input type="number" name="mobile" value="{{$teacher->mobile}}" class="form-control" id="horizontal-firstname-input" >
                            </div>
                        </div>                            {{--Form Group start--}}

                        <div class="form-group row mb-4"> {{--Form Group start--}}
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea name="address" placeholder="{{$teacher->address}}" id="" class="form-control"></textarea>
                            </div>
                        </div>                            {{--Form Group start--}}

                        <div class="form-group row mb-4"> {{--Form Group start--}}
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" id="" class="form-control-file" accept="imgage/*"/>
                            </div>
                        </div>                            {{--Form Group start--}}

                        <div class="row">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <img src="{{asset($teacher->image)}}" alt="{{'Photo of Mr. '.$teacher->name}}" width="100px" height="100px" class="my-2">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Teacher info</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
