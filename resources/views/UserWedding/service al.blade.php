<html>
  <head>
    <title>Image Slider</title>
      <link rel="stylesheet" href="{{asset('css/style service al.css')}}">
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
              <h1>Prima Decoration</h1>
              <div id="headerSlider1" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#headerSlider1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#headerSlider1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#headerSlider1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#headerSlider1" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="image/217348.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="image/IMG_20210324_192049.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="image/IMG_20210422_045913.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="image/DSC_3160.JPG">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#headerSlider1" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#headerSlider1" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <!--Slider-->

            <!--Make Up-->
            <div id="slider">
              <h1>Prima Make Up</h1>
              <div id="headerSlider2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#headerSlider2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#headerSlider2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#headerSlider2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="image/DSC02231.JPG">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="image/DSC02421.JPG">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="image/DSC02537.JPG">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#headerSlider2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#headerSlider2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <!--Make Up-->

            <!--Busana-->
            <div id="slider">
              <h1>Prima Busana</h1>
              <div id="headerSlider3" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#headerSlider3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#headerSlider3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#headerSlider3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#headerSlider3" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block img-fluid" src="image/217355.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="image/SHT00291.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="image/SHT00481.jpg">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block img-fluid" src="image/DSC_0129.jpg">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#headerSlider3" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#headerSlider3" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <!--Busana-->

            <!--Tabel-->
            <section class="tabel">
              <h1>Our Services</h1>
              <table class="table table-striped" style="width: 80%; margin-left: 150px;">
                <tr>
                  <th style="width: 20px;">No.</th>
                  <th>Paket Lily
                    <img src="image/lily(1).png">
                  </th>
                  <th>Paket Rose
                    <img src="image/rose(1).png">
                  </th>
                </tr>
                <tr>
                  <th>1.</th>
                  <th>Make up & busana pengantin(3x ganti gaun)</th>
                  <th>Make up & busana pengantin(3x ganti gaun)</th>
                </tr>
                <tr>
                  <th>2.</th>
                  <th>Make up & busana orang tua(4 orang)</th>
                  <th>Make up & busana orang tua(4 orang)</th>
                </tr>
                <tr>
                  <th>3.</th>
                  <th>Make up & busana bridesmaid(pria & wanita, 8 orang)</th>
                  <th>Make up & busana domas(4 orang)</th>
                </tr>
                <tr>
                  <th>4.</th>
                  <th>-</th>
                  <th>Make up & busana manggolo/penerima tamu</th>
                </tr>
                <tr>
                  <th>5.</th>
                  <th>Make up & busana patah(2 orang)</th>
                  <th>Make up & busana patah(2 orang)</th>
                </tr>
                <tr>
                  <th>6.</th>
                  <th>Adat jawa(cucuk lampah & dalang pengantin)</th>
                  <th>-</th>
                </tr>
                <tr>
                  <th>7.</th>
                  <th>Henna tangan</th>
                  <th>Henna tangan</th>
                </tr>
                <tr>
                  <th>8.</th>
                  <th>Dekorasi pelaminan bunga segar& sintetis(ukuran dan model dekorasi menyesuaikan lokasi maksimal panjang dekorasi 10m)</th>
                  <th>Dekor pelaminan 8m bunga asli</th>
                </tr>
                <tr>
                  <th>9.</th>
                  <th>Tenda pelaminan & dekorasi plafon pelangi</th>
                  <th>Plafon pelangi area dekorasi</th>
                </tr>
                <tr>
                  <th>10.</th>
                  <th>Dekorasi photobooth</th>
                  <th>Dekorasi photobooth</th>
                </tr>
                <tr>
                  <th>11.</th>
                  <th>Dekorasi kamar & mobil penganti</th>
                  <th>Dekorasi kamar pengantin</th>
                </tr>
                <tr>
                  <th>12.</th>
                  <th>Dekorasi karpet jalan</th>
                  <th>-</th>
                </tr>
                <tr>
                  <th>13.</th>
                  <th>Welcome gate & pragolla</th>
                  <th>Welcome gate</th>
                </tr>
                <tr>
                  <th>14.</th>
                  <th>Setting akad nikah(kursi tiffany)</th>
                  <th>Setting akad nikah(kursi tiffany)</th>
                </tr>
                <tr>
                  <th>15.</th>
                  <th>3 meja VIP, 2 meja prasmanan, 2 meja kado, dan 3 gubug hidangan</th>
                  <th>2 set meja prasmanan dan 3 gubug hidangan</th>
                </tr>
                <tr>
                  <th>16.</th>
                  <th>2 kotak uang dan 2 blower</th>
                  <th>2 kotak uang dan 2 blower</th>
                </tr>
                <tr>
                  <th>17.</th>
                  <th>Photo unlimited & cetak 16R</th>
                  <th>Photo unlimited & cetak 150pcs</th>
                </tr>
                <tr>
                  <th>18.</th>
                  <th>Video unlimited & cinematic</th>
                  <th>Video unlimited</th>
                </tr>
                <tr>
                  <th>19.</th>
                  <th>Hiburan organ tunggal(1 MC, 2 singer, dan 1 player) dan panggung</th>
                  <th>Hiburan organ tunggal(1 MC, 2 singer, dan 1 player) dan panggung</th>
                </tr>
                <tr>
                  <th>20.</th>
                  <th>Sound system, genset, lampu malam hari-H</th>
                  <th>Sound system, genset, lampu malam hari-H</th>
                </tr>
                <tr>
                  <th>21.</th>
                  <th>Stand foto pre-wedding 2</th>
                  <th>Stand foto pre-wedding 2</th>
                </tr>
                <tr>
                  <th>*</th>
                  <th>Paket di atas untuk model pengantin hijab, sedangkan untuk model solo putri/paes ageng(plus 1 juta)</th>
                  <th>Model solo putri/paes ageng(plus 1 juta)</th>
                </tr>
              </table>
            </section>
            <!--Tabel-->
            @endsection
        </body>
    </head>
</html>