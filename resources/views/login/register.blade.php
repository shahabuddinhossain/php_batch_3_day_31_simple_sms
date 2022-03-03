@extends('master.front.master')

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Register Form
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <div class="row"> {{--Form Group--}}
                                    <label for="" class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="text" name="name" id="">
                                    </div>
                                </div>    {{-- /Form Group--}}

                                <div class="row mt-3"> {{--Form Group--}}
                                    <label for="" class="col-md-3">Email Address</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="email" name="email" id="">
                                    </div>
                                </div>    {{-- /Form Group--}}

                                <div class="row my-3"> {{--Form Group--}}
                                    <label for="" class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input class="form-control" type="password" name="password" id="">
                                    </div>
                                </div>    {{-- /Form Group--}}

                                <div class="row my-3"> {{--Form Group--}}
                                    <label for="" class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input class="btn btn-outline-success" type="submit" name="" id="" value="Submit">
                                    </div>
                                </div>    {{-- /Form Group--}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
