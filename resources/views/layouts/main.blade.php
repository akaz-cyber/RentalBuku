<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <title>Rental Buku - @yield('title') </title>
  </head>
  <body>
 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">
            Rental Buku
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-lg-5 mx-md-5" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link mx-lg-3 mx-md-3" href="/">Home</a>
                <a class="nav-link mx-lg-3 mx-md-3" href="/listbuku">List buku</a>
                <form class="d-flex">
                    <input class="form-control me-lg-5 me-md-5 round-m" type="search" placeholder="Cari Buku" aria-label="Search">
                </form>
            </div>
            <div class="ms-auto">

                <a class="btn  btn-lg btn-md btn-sm btn-purple rounded-3" href="/login">Masuk</a>

            </div>
        </div>
    </div>
</nav>

@yield('content')
{{-- @yield('Card')
@yield('about')
@yield('trending') --}}


<footer class="text-white.bg-foote bg-footer py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5 class="text-light">Rental Buku</h5>
                <ul class="list-unstyled  ">
                    <li><a href="#" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="#" class="text-white text-decoration-none">List Buku</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Kontak Kami</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Masuk</a></li>
                </ul>
            </div>
            <div class="col-md-4 text-light">
                <h5>Layanan Pelanggan Operasional</h5>
                <p>Senin - Minggu 09.00-17.00 WIB<br>Kecuali Hari Libur Nasional</p>
            </div>
            <div class="col-md-4 text-end">
                <h5 class="text-light">Ikuti kami</h5>
              <div class="mx-auto">

                  <a href="#" target="_blank" rel=”noopener”><i class="fa fa-instagram mx-2" style="font-size:24px"></i></a>
                  <a href="#" target="_blank" rel=”noopener”><i class="fa fa-facebook-square me-2" style="font-size:24px"></i></a>
                  <a href="#" target="_blank" rel=”noopener”><i class="fa fa-whatsapp" style="font-size:24px"></i></i></a>
              </div>
            </div>
        </div>
    </div>
</footer>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('javascript/scrool.js') }}"> </script>
</body>
