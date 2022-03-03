<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
</head>
<body>


<nav class="navbar navbar-expand-md bg-dark navbar-dark border-bottom shadow sticky-top">
    <div class="container">
        <a href="" class="navbar-brand">UCEP</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                <li><a href="{{route('home')}}" class="nav-link">All Courses</a></li>
                <li><a href="{{route('user-login')}}" class="nav-link">login</a></li>
                <li><a href="{{route('user-register')}}" class="nav-link">Registration</a></li>
            </ul>
    </div>
</nav>

@yield('body')

<footer class="pt-5 pb-4 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card card-body">
                    <h3>About Institute</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium aspernatur commodi cum molestiae mollitia nesciunt praesentium repellat tenetur! Adipisci, aspernatur culpa cupiditate dicta dolores, ex id minus non odio, pariatur placeat provident reiciendis. Ab aperiam consequuntur eaque eos fugit in, itaque laudantium nisi obcaecati omnis perspiciatis quibusdam reiciendis unde.</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card card-body rounded-8">
                    <h3>Populer Links</h3>
                    <hr/>
                    <ul>
                        <li><a href="">Populer Courses</a></li>
                        <li><a href="">Populer Courses</a></li>
                        <li><a href="">Populer Courses</a></li>
                        <li><a href="">Populer Courses</a></li>
                        <li><a href="">Populer Courses</a></li>
                        <li><a href="">Populer Courses</a></li>
                        <li><a href="">Populer Courses</a></li>
                        <li><a href="">Populer Courses</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-body rounded-8">
                    <h3>Follow Us on</h3>
                    <hr/>
                    <ul class="nav">
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-facebook-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-linkedin"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-youtube-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-youtube"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-google-plus-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-instagram-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-whatsapp-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-github-square"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-discord"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-telegram"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitter"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-viber"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitch"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-reddit"></i></a></li>
                        <li><a href="" class="nav-link"><i class="fab fa-2x fa-behance-square"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
        <hr class="bg-white mt-5" />
        <div class="row">
            <div class="col-md-12">
                <p class="text-white text-center mb-0">Copyright@2022. All rights reserved by BASIS SEIP PWLFB-3.</p>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('/')}}js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.js"></script>
<script src=""></script>
</body>
</html>
