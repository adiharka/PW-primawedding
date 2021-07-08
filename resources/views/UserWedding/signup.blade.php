<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{asset('css/style sign up.css')}}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
<body>
    <!--Navigation-->
    <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="image/1619148608378.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('/') }}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('service') }}">Service</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Plan Your Wedding</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Sign In</a>
                      </li>
                    </ul>
                  </div>
              </div>
            </nav>
          </section>
          <script>
            window.onscroll = function() {myFunction()};

            var header = document.getElementById("nav-bar");
            var sticky = header.offsetTop;

            function myFunction() {
              if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
              } else {
                header.classList.remove("sticky");
              }
            }
          </script>
          <!--Navigation-->

    <!--Loginbox-->
    <section class="signup">
    <div class="loginbox">
        <h1>Sign Up</h1>
        <form action="{{ route('signup') }}" method="post">
        @csrf
        <div class="card-body">
        @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
            <p>Username</p>
            <input type="text" name="name" placeholder="Enter Username">
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <p>Confirm Password</p>
            <input type="password" name="password_confirmation" placeholder="Re-enter Your Password">
            <input type="submit" name="" value="Register">
            <a href="#">Forget your password?</a><br>
            <a href="{{ route('login') }}">Already have an account?</a>
        </form>
    </div>
    </section>
    <!--Loginbox-->
    
</body>
</head>
</html>