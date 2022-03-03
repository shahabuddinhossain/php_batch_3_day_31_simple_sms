@extends('master.front.master')



@section('body')

    <section class="notice-section py-5">    {{--Carousel section--}}
        <div class="container">
            <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="card card-body">
                            <h3>Lorem Course with Lerem Framework</h3>
                            <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa debitis id numquam quisquam suscipit. Enim facilis impedit laborum veritatis voluptatibus.</p>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, expedita, iusto. Aspernatur at aut consequatur corporis doloremque, dolores eum ipsa iusto maiores modi repellat sequi, sunt tempore velit veniam. Cum?</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card card-body">
                            <h3>Lorem Course with Lerem Framework</h3>
                            <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa debitis id numquam quisquam suscipit. Enim facilis impedit laborum veritatis voluptatibus.</p>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, expedita, iusto. Aspernatur at aut consequatur corporis doloremque, dolores eum ipsa iusto maiores modi repellat sequi, sunt tempore velit veniam. Cum?</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="card card-body">
                            <h3>Lorem Course with Lerem Framework</h3>
                            <p class="card-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa debitis id numquam quisquam suscipit. Enim facilis impedit laborum veritatis voluptatibus.</p>
                            <p class="card-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, expedita, iusto. Aspernatur at aut consequatur corporis doloremque, dolores eum ipsa iusto maiores modi repellat sequi, sunt tempore velit veniam. Cum?</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>    {{--Carousel section--}}


    <section class="py-5">   {{--Coursesection--}}
        <div class="container">
            <div class="row">
                <div class="col-md-6">    {{-- Card Start --}}
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/')}}img/pi01.jpg" class="img-fluid rounded-start w-100 h-100" alt="..." />
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <figure>
                                            <blockquote class="blockquote">
                                                <p>A well-known quote, contained in a blockquote element.</p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer">
                                                Someone famous in <cite title="Source Title">Source Title</cite>
                                            </figcaption>
                                        </figure>
                                        <ul>
                                            <li>Course Feature One</li>
                                            <li>Course Feature One</li>
                                            <li>Course Feature One</li>
                                            <li>Course Feature One</li>
                                        </ul>
                                    </h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('course-detail')}}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    {{-- Card End --}}

                <div class="col-md-6">    {{-- Card Start --}}
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/')}}img/pi02.jpg" class="img-fluid rounded-start w-100 h-100" alt="..." />
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <figure>
                                            <blockquote class="blockquote">
                                                <p>A well-known quote, contained in a blockquote element.</p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer">
                                                Someone famous in <cite title="Source Title">Source Title</cite>
                                            </figcaption>
                                        </figure>
                                        <ul>
                                            <li>Course Feature One</li>
                                            <li>Course Feature One</li>
                                            <li>Course Feature One</li>
                                            <li>Course Feature One</li>
                                        </ul>
                                    </h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('course-detail')}}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    {{-- Card End --}}

                <div class="col-md-6">    {{-- Card Start --}}
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/')}}img/pi03.jpg" class="img-fluid rounded-start w-100 h-100" alt="..." />
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <figure>
                                            <blockquote class="blockquote">
                                                <p>A well-known quote, contained in a blockquote element.</p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer">
                                                Someone famous in <cite title="Source Title">Source Title</cite>
                                            </figcaption>
                                        </figure>
                                        <ul>
                                            <li>Course Feature One</li>
                                            <li>Course Feature One</li>
                                            <li>Course Feature One</li>
                                            <li>Course Feature One</li>
                                        </ul>
                                    </h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('course-detail')}}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    {{-- Card End --}}

                <div class="col-md-6">    {{-- Card Start --}}
                    <div class="card mb-3" >
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="{{asset('/')}}img/pi04.jpg" class="img-fluid rounded-start w-100 h-100" alt="..." />
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <figure>
                                            <blockquote class="blockquote">
                                                <p>A well-known quote, contained in a blockquote element.</p>
                                            </blockquote>
                                            <figcaption class="blockquote-footer">
                                                Someone famous in <cite title="Source Title">Source Title</cite>
                                            </figcaption>
                                        </figure>
                                        <ul>
                                            <li>Course Feature One</li>
                                            <li>Course Feature One</li>
                                            <li>Course Feature One</li>
                                            <li>Course Feature One</li>
                                        </ul>
                                    </h5>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    <a href="{{route('course-detail')}}" class="btn btn-outline-success">Read More</a>
                                    <a href="" class="btn btn-outline-info float-end">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    {{-- Card End --}}

            </div>
        </div>
    </section>   {{--Course section--}}


    <section class="py-5 bg-secondary">  {{--Subscribe section--}}
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-9">
                                    <input type="text"  class="form-control" name="" id="">
                                </div>
                                <div class="col-3">
                                    <input type="submit" class="btn btn-outline-dark w-100" value="subscribe now">
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>  {{--Subscribe section--}}

@endsection
