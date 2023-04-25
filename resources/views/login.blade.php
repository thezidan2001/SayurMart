<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    {{-- Bootstrap Icons --}}
    <link href="build/assets/css/bootstrap.css" rel="stylesheet">
    <link href="build/assets/css/ui.css" rel="stylesheet">
    <link href="build/assets/css/responsive.css" rel="stylesheet">

    <link href="build/assets/css/all.min.css" rel="stylesheet">
    <script src="build/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="build/assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

    <title>Register</title>
</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-4">
          
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
                <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>
                <form action="/login" method="post">
                  @csrf
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                  </div>
              
                  <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Not registered? <a href="/register">Register Now!</a></small>
              </main>
            </div>
          </div>
    </div>
</body>

</html>