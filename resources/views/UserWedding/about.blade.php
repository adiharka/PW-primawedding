<html>
  <head>
    <title>Wedding Organizer</title>
      <link rel="stylesheet" href="{{asset('css/style about.css')}}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
        <body>
        @extends('UserWedding.layouts.app')

        @section('content')            
          <!--About-->
          <section class="about-us">
            <div class="row">
              <div class="about-col">
                <div class="tulisan">
                <h1>Prima Wedding: Wedding Organizer and Planner in Purworejo City</h1>
                <p>Berdasarkan tingginya tarif pernikahan di Purworejo, kami mendedikasikan
                  diri kami untuk membantu calon pengantin, dengan menjalankan wedding planner
                  dan organizer. Kami menyediakan kebutuhan pernikahan sesuai request calon
                  pengantin, dan juga layanan untuk mengatur momen yang berkesan sesuai dengan
                  kebutuhan mereka. Jam terbang kami yang 'tinggi' telah membuktikan bahwa kami
                  adalah tim yang andal dengan kapasitas kreatif yang dapat Anda percaya untuk
                  membuat hari pernikahan Anda tak terlupakan. Ini merupakan tugas kami untuk
                  mewujudkan pernikahan impian Anda, dan menjadi bagian dari hari pernikahan Anda.
                  Prima Wedding akan memandu Anda melalui setiap langkah, menjaga segala sesuatunya
                  sesuai jadwal, menyelesaikan setiap kebutuhan yang Anda miliki, dan akan memastikan
                  bahwa pernikahan berjalan sesuai rencana.</p>
                  </div>
              </div>
              <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
              <div class="figure col-md-4">
                <img class="image-main" src="{{URL('image/DSC02537.JPG')}}" alt="Demo image 1">
                <img class="image-hover" src="{{URL('image/DSC02231.JPG')}}" alt="Demo image 2">
              </div>
            </div>
          </section>
          <!--About-->
          @endsection            
        </body>
    </head>
</html>