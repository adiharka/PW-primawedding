<html>
  <head>
    <title>Wedding Organizer</title>
      <link rel="stylesheet" href="style index.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
        <body>
          <!--Navigation-->
          <header>
          <section id="nav-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="{{URL('image/1619148608378.png')}}"></a>
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
          </header>
          <!--Navigation-->
            
          @yield('content')

            <!--Footer-->
            <section class="footer">
              <footer>
                <div class="footer-content">
                  <h3>Prima Wedding</h3>
                  <p>Jl. Abu Hurairah, Tlepokwetan, RT/RW 01, Grabag, Purworejo, Jawa Tengah, Indonesia</p>
                  <p>You can contact us any time you want. We will make sure to answer any of your questions related to our work.</p>
                  <ul class="socials">
                    <li>
                      <a href="https://www.instagram.com/primawedding_org/">
                        <i class="fa fa-instagram"> primawedding_org</i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/primawedding_makeup/">
                        <i class="fa fa-instagram"> primawedding_makeup</i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/primawedding_dress/">
                        <i class="fa fa-instagram"> primawedding_dress</i>
                      </a>
                    </li>
                    <li>
                      <a href="https://mail.google.com/mail/u/0/#inbox">
                        <i class="fa fa-google"> prima.weddingplanner@gmail.com</i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.facebook.com/prima.amethys">
                        <i class="fa fa-facebook"> Prima Amethys</i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.whatsapp.com/">
                        <i class="fa fa-whatsapp"> 081328302234</i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="footer-bottom">
                  <p>copyright &copy;2020 Prima Wedding. Designed by <span>Brava073_Intalitha074<span></p>
                </div>
              </footer>
            </section>
            <!--Footer-->
        </body>
    </head>
</html>