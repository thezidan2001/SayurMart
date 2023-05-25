<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SayurMart</title>

    <link rel="stylesheet" href="build/assets/css/bootstrap.css">
    <link rel="stylesheet" href="build/assets/css/new.css">
	<script type="text/javascript" src="build/assets/js/jquery.js"></script>
	<script type="text/javascript" src="build/assets/js/bootstrap.js"></script>	

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navigation Bar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="build/assets/images/items/logo.jpg" alt="Logo"></a>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" size="60">
                <button class="btn sm-button" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#24bbbe" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
            @guest
            <div>
                <a data-toggle="modal" data-target="#myModal1" onclick="">
                    <button class="btn sm-button mr-2" type="button">
                        Masuk
                    </button>    
                </a>
                <a data-toggle="modal" data-target="#myModal2">
                    <button class="btn sm-button" type="button">
                        Daftar
                    </button>    
                </a>
                {{-- <div class="dropdown">
                    <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" 
                                                    onclick="   event.preventDefault();
                                                                document.getElementById('logout-form').submit();"
                            >Logout</a></li>
                    </ul>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form> --}}
            </div>
            @else
            <div>
                <a class="btn sm-button mr-2" href="/cart" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg>
                </a>
                <a class="btn sm-button mr-2" href="/profile" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                    </svg>
                </a>
                <form action="{{ route('logout') }}" method="POST" style="display:inline">
                    @csrf
                    <button class="btn sm-button">Logout</button>
                </form>
            </div>
            @endguest
        </div>
    </nav>

    <!-- Pop-up Login -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#24bbbe">
                    <img src="build/assets/images/items/logo.jpg" alt="Logo" style="width: 100px; height: 50px; object-fit: cover;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-3 mb-3">
                        <div class="row justify-content-center">
                            <div class="col-md-8">

                                @if(session()->has('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif

                                @if(session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif

                                <main class="form-signin">
                                    <h1 class="h3 mb-3 fw-normal text-center">Masuk</h1>
                                    <form action="/login" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>                                            
                                        </div>

                                        <button class="w-100 btn sm2-button-reverse mt-3" type="submit">Masuk</button>
                                    </form>
                                    <small class="d-block text-center mt-3">Belum daftar? <a style="color:#24bbbe;text-decoration:underline;" data-toggle="modal" data-target="#myModal2" data-dismiss="modal">Daftar sekarang</a></small>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pop-up Register -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#24bbbe">
                    <img src="build/assets/images/items/logo.jpg" alt="Logo" style="width: 100px; height: 50px; object-fit: cover;">    
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-3 mb-3">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <main class="form-registration">
                                    <h1 class="h3 mb-3 fw-normal text-center">Daftar</h1>
                                    <form action="/register" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                                            @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                                            @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="telephone" value="0">

                                        <button class="w-100 btn sm2-button-reverse mt-3" type="submit">Daftar</button>
                                    </form>
                                    <small class="d-block text-center mt-3">Sudah daftar? <a style="color:#24bbbe;text-decoration:underline;" data-toggle="modal" data-target="#myModal1" data-dismiss="modal">Masuk</a></small>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb Profile -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- User Profile -->
                <div class="card user-profile">
                    <div class="card-header">
                        <h4 class="float-left mb-0 mt-2">User Profile</h4>
                        <a href="" class="btn btn-primary btn-100 float-right text-uppercase">Edit</a>
                    </div>

                    <div class="card-body pb-0 pt-0">

                    </div>


                    <div class="card-header">
                        <h5 class="float-left mb-0 mt-1 w-100 text-center">
                            <span class="text-info"> </span> <small class="text-muted font-italic">(Private)</small>
                        </h5>
                    </div>

                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-6 text-sm-right">Name</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">{{ Auth::user()->name }}</span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Job</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Company</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="card-header border-top">
                        <h5 class="float-left mb-0 mt-1">Contact</h5>
                    </div>

                    <div class="card-body">
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Phone no.</div>
                            <div class="col-sm-6 field-bg">

                                <div class="row">
                                    <span class="text-muted">
                                        {{ Auth::user()->telephone }}
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Mobile no.</div>
                            <div class="col-sm-6 field-bg">

                                <div class="row">
                                    <span class="text-muted">
                                        {{ Auth::user()->telephone }}
                                    </span>
                                </div>

                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Email</div>
                            <div class="col-sm-6 field-bg">

                                <div class="row">
                                    <span class="text-muted">
                                        {{ Auth::user()->email }}
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card-header border-top">
                        <h5 class="float-left mb-0 mt-1">Address</h5>
                    </div>

                    <div class="card-body">
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Country</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Town / City</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Street / Road</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Building</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Office</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                        <div class="row  mb-2">
                            <div class="col-sm-6 text-sm-right">Extra Details</div>
                            <div class="col-sm-6 field-bg">
                                <span class="text-muted">

                                </span>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /User Profile -->

            </div>
        </div>
    </div>

</body>

<footer class="mt-auto">
    <div class="container-fluid sm-footer mt-4">
        <div class="row justify-content-center">
            <div class="col-3 mt-5 mb-4 align-self-center">
                <div class="d-flex justify-content-center">
                    <a href="/"><img src="build/assets/images/items/logo.jpg" alt="Logo" style="width: 150px;height: 75px;object-fit: cover;"></a>
                </div>
            </div>
            <div class="col-6">
            </div>
            <div class="col-3 mt-5 mb-4 align-self-center">
                <div class="d-flex justify-content-center">Temukan kami di</div>
                <div class="d-flex justify-content-center mt-2">
                    <a class="btn sm-button mr-2" href="" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                    </a>
                    <a class="btn sm-button mr-2" href="" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                    </a>
                    <a class="btn sm-button" href="" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-3">
                <div class="d-flex justify-content-center">&copyCopyright. All rights reserved.</div>
            <div>
        </div>
    </div>
</footer>

</html>
