<html>
  <head>
    <title>Wedding Organizer</title>
      <link rel="stylesheet" href="{{asset('css/style alindex.css')}}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
        <body>
          @extends('UserWedding.layouts.appal')
          
          @section('content')
          <!--Slider-->
            <div id="slider">
              <div id="headerSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#headerSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#headerSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#headerSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#headerSlider" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="image/217355.jpg">
                      <div class="carousel-caption">
                        <h5>Plan Your Wedding</h5>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="image/SHT00291.jpg">
                      <div class="carousel-caption">
                        <h5>Marry With Your Partner</h5>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="image/SHT00481.jpg">
                      <div class="carousel-caption">
                        <h5>Make Your Dreams Come True</h5>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="image/DSC_0129.jpg">
                      <div class="carousel-caption">
                        <h5>Happily Ever After</h5>
                      </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#headerSlider" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#headerSlider" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <!--Slider-->

            <!--About-->
            <section id="about">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <h2>About Us</h2>
                      <div class="about-content">
                        Prima Wedding merupakan rebranding dari WO bernama Ummi Wedding Planner yang berdiri pada tahun 1996. Ummi Wedding Planner didirikan oleh Ibu Umiyati, yakni Ibu dari pemilik Prima Wedding, yaitu Intan Amethys. Prima Wedding ini berdiri pada tahun 2017, yang beralamatkan di Jalan Abu Hurairah, Tlepokwetan, RT/RW 01, Grabag, Purworejo, Jawa Tengah
                      </div>
                      <button type="button" class="btn btn-primary">
                        <a href="about.php" style="color: #fff;">Read more</a>
                      </button>
                  </div>
                  <div class="col-md-6"></div>
                </div>
              </div>
            </section>
            <!--About-->
            
            <!--Services-->
            <section id="services">
              <div class="container">
                <h1>Our Services</h1>
                <div class="row service">
                  <div class="col-md-3 text-center">
                    <div class="icon">
                      <img src="image/checklist.png" class="serviceicon">
                      <p></p>
                    </div>
                    <h3>Wedding Plan</h3>
                    <p>[Wedding plan service description]</p>
                  </div>
                  <div class="col-md-3 text-center">
                    <div class="icon">
                      <img src="image/cosmetics.png" class="serviceicon">
                      <p></p>
                    </div>
                    <h3>Make Up</h3>
                    <p>[Make up service description]</p>
                  </div>
                  <div class="col-md-3 text-center">
                    <div class="icon">
                      <img src="image/photo-camera.png" class="serviceicon">
                      <p></p>
                    </div>
                    <h3>Documentation</h3>
                    <p>[Documentation service description]</p>
                  </div>
                  <div class="col-md-3 text-center">
                    <div class="icon">
                      <img src="image/saxophone.png" class="serviceicon">
                      <p></p>
                    </div>
                    <h3>Entertainment</h3>
                    <p>[Entertainment service description]</p>
                  </div>
                  <p></p>
                  <div class="col-md-6 text-center">
                    <div class="icon">
                      <img src="image/microphone.png" class="serviceicon">
                      <p></p>
                    </div>
                    <h3>Master of Ceremony</h3>
                    <p>[Master of ceremony service description]</p>
                  </div>
                  <div class="col-md-6 text-center">
                    <div class="icon">
                      <img src="image/dish.png" class="serviceicon">
                      <p></p>
                    </div>
                    <h3>Catering</h3>
                    <p>[Catering service description]</p>
                  </div>
                </div>
              </div>
            </section>
            <!--Services-->
            @endsection
        </body>
    </head>
</html>