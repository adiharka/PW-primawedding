<html>
  <head>
    <title>Wedding Organizer</title>
      <link rel="stylesheet" href="{{asset('css/style about al.css')}}">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" ></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
        <body>
        @extends('UserWedding.layouts.appal')
          
          @section('content')
          <!--Table-->
          <section class="tabel">
              <h1>Our Services</h1>
              <table class="table table-striped" style="width: 80%; margin-left: 150px;">
                <tr>
                  <th style="width: 20px;">No.</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Telepon</th>
                  <th>Tanggal Nikah</th>
                  <th>Service</th>
                  <th>Budget</th>
                  <th>Number of Guest</th>
                  <th>Special Request</th>
                </tr>
                @foreach($ordrs as $ordr)
                <tr>
                  <th>{{ $ordr->id }}</th>
                  <th>{{ $ordr->name }}</th>
                  <th>{{ $ordr->email }}</th>
                  <th>{{ $ordr->phone }}</th>
                  <th>{{ $ordr->date }}</th>
                  <th>{{ $ordr->service }}</th>
                  <th>{{ $ordr->budget }}</th>
                  <th>{{ $ordr->guest }}</th>
                  <th>{{ $ordr->sprequest }}</th>
                </tr>
                @endforeach
              </table>
            </section>
          <!--Table-->
          @endsection            
        </body>
    </head>
</html>