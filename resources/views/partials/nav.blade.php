
<body class="d-flex flex-column min-vh-100">
    <!-- Navigation Bar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ asset('build/assets/images/items/logo.jpg') }}" alt="Logo"></a>
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
                <?php
                    $count = 0;
                    \Cart::session(Auth::user()->id);
                    if (\Cart::getContent()){
                        $count = \Cart::getContent()->count();
                    }
                    
                ?>
                <a class="btn sm-button mr-2" href="/cart" role="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                    </svg> <span class="badge badge-light">{{ $count }}</span>
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

    