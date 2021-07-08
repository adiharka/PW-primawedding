<html>
  <head>
    <title>Wedding Organizer</title>
      <link rel="stylesheet" href="{{asset('css/style order.css')}}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
        <body>
          @extends('UserWedding.layouts.appal')
          
          @section('content')
          <!--Order-->
          <section class="order">
            <div class="container">
                <div class="orderbox">
                <!-- @if(session('errors'))
                Foreach ($errors->all() as $error)
                <p>{{$errors}} <p/>
                @endif -->
                  <form name="ordersubmit" action="{{ route('table.store')}}" method="POST">
                    @csrf
                    <p>Name</p>
                    <input type="text" name="name" placeholder="Masukkan nama lengkap" id="name"/>
                    <p>Email</p>
                    <input type="email" name="email" placeholder="Masukkan email anda" id="email"/>
                    <p>Phone Number/Whatsapp</p>
                    <input type="number" name="phone" placeholder="Masukkan nomor HP aktif atau  whatsapp" id="phone"/>
                    <p>Gender</p>
                    <div class="radio-inline">
                        <input type="radio" id="gender" name="gender" value="male">
                        <label for="male">Male</label>
                        <input type="radio" id="gender" name="gender" value="female">
                        <label for="female">Female</label>                        
                    </div>
                    <p>Tanggal Lahir</p>
                    <input type="date"  name="birth" id="birth"/>

                    <p>Umur</p>
                    <input type="number" min="10"  max="90" id="umur" name="age" id="age"/>

                    <p>Wedding Date</p>
                    <input type="date"  id="date_w" name="date" id="date"/>

                    <p>Service</p>
                    <textarea name="service" placeholder="Tulis semua layanan yang dibutuhkan" id="service"></textarea>

                    <p>Wedding Budget</p>
                    <input type="number"  id="budget" name="budget" placeholder="Tulis kemampuan biaya anda" id="budget"/>

                    <p>Approximiate Number of Guests</p>
                    <input type="number"  id="guest" name="guest" placeholder="Tulis rata-rata jumlah tamu yang diundang" id="guest"/>

                    <p>Any Special Request</p>
                    <textarea name="sprequest" id="sprequest"></textarea>

                    <input type="submit" name="" value="Order Now!">
                  </form>
                </div>
            </div>
          </section>
          <!--Order-->
          @endsection            
        </body>
    </head>
</html>