{{-- <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <title>Home</title>
  </head>
  <body> --}}


   {{-- hero --}}

   @extends('layouts.main')
   @section('title','Home')

   @section('content')
 {{-- hero --}}
   <div class="container p-5">
    <div class="row">
        <div class="col-7">
          <div class="middle-align mt-5 p-0" >
                <p class="text-white texth2 p-0 mx-1">Selamat datang</p>
                <b class="text-white texth1">Temukan Buku Impianmu</b>
                <b class="texth3 text-white p-0 mx-2">Sewa Buku Favorit Anda</b>
            <div class="mt-5">
                <button type="button" class="btn btn-success btn-lg mx-2 rounded-4 shadow" style="width: 30%" >List Buku</button>
            </div>
        </div>
          </div>
       <div class="col-5">
   <div class="">
     <img src={{ asset('images/Photo1.png') }} class="img-fluid" alt="">
   </div>
       </div>
    </div>
</div>
{{-- endhero --}}


{{-- card --}}

   <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card border border-dark shadow" style="width: 23rem; height: 11rem; ">
                 <div class="card-body ">
                    <div class="row">
                      <div class="col-md-2">
                        <i class="fa fa-check-square-o" style="font-size:50px"></i>
                      </div>
                      <div class="col-md-9">
                        <h5 class="card-title text-2 blueold">Kenyamanan dalam sewa</h5>
                        <p class="card-text text-1 blue">Proses sewa buku sangatlah mudah. Cukup daftar sebagai anggota, pilih buku yang Anda inginkan, dan anda tinggal datang ke perpustakaan kami. Setelah Anda selesai membaca, kembalikan buku tersebut dengan langsung ke perpustakaan kami.</p>

                      </div>
                  </div>

                 </div>
               </div>
            </div>


            <div class="col-4">
                <div class="card border border-dark" style="width: 23rem; height: 11rem;">
                    <div class="card-body ">
                       <div class="row">
                         <div class="col-md-2">
                            <i class="fa fa-book" style="font-size:50px"></i>
                         </div>
                         <div class="col-md-9">
                           <h5 class="card-title text-2 blueold">Koleksi Buku Yang Luas</h5>
                           <p class="card-text text-1 blue">Kami memiliki koleksi buku yang beragam dari berbagai kategori, mulai dari fiksi, non-fiksi, novel, hingga buku-buku referensi. Anda akan menemukan buku-buku terbaru.</p>
                         </div>
                     </div>

                    </div>
                  </div>
            </div>

            <div class="col-4">
                <div class="card border border-dark" style="width: 23rem; height: 11rem;">
                    <div class="card-body ">
                       <div class="row">
                         <div class="col-md-2">
                            <i class="fa fa-smile-o" style="font-size:50px"></i>
                         </div>
                         <div class="col-md-9">
                           <h5 class="card-title text-2 blueold">Pelayanan Yang Prima</h5>
                           <p class="card-text text-1 blue">Selalu siap membantu Anda dalam setiap tahap perjalanan membaca. Jika Anda memiliki pertanyaan atau masalah, jangan ragu untuk menghubungi kami. Kepuasan pelanggan adalah prioritas utama kami.</p>

                         </div>
                     </div>

                    </div>
                  </div>
        </div>

            </div>
   </div>
{{-- endcard --}}



   {{-- About --}}
   <div class="container">
      <div class="text-lm">
          <h1 class="text-3">Tentang kami</h1>
           <hr class="linety">
      </div>
       <br>
       <div class="bg-white rounded-2">
        <div class="row">

            <div class="col-md-4 mt-4 mx-md-4">
                <img src={{'images/photo2.png'}} class="img-fluid" alt="">

            </div>
            <div class="col-md-6 " >
                <div class="d-flex align-items-center" style="height: 100%">
                    <div class="" >
                        <p class="texth2 blue">Rental buku adalah aplikasi yang memungkinkan pengguna untuk menyewa buku dari perpustakaan secara online.</p>
                        <p class="texth2 blue">Pengguna juga dapat mendapatkan informasi tentang buku yang ada.</p>
                    </div>


                </div>

            </div>

        </div>

       </div>
    </div>

  {{-- End about --}}




{{-- trending --}}
   <div class="container">
       <div class="row mt-md-2">
        <div class="col-md-8">
            <h1 class="text-white">Trending Buku</h1>
            <hr class="lineleft">
        </div>
        <div class="col-md-4 mt-3 ">
            <div class="mx-md-5 text-end">
                <a class="texth2 text-light text-decoration-none" href="">Lihat semua -></a>

            </div>

        </div>


       </div>
       <div class="row">
        <div class="col-md-3">
            <div class="card" style="width: 15rem;">
            <img src={{'images/buku1.jpg'}} class="card-img-top img-fluid" alt="...">
          </div>
          <div class="mb-3">

              <button class="btn bg-purple" style="width: 15rem ">Lihat buku</button>
          </div>

        </div>
        <div class="col-md-3">
            <div class="card" style="width: 15rem;">
            <img src={{'images/buku1.jpg'}} class="card-img-top img-fluid" alt="...">
          </div>
          <div class="mb-3">

            <button class="btn bg-purple" style="width: 15rem ">Lihat buku</button>
        </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 15rem;">
            <img src={{'images/buku1.jpg'}} class="card-img-top img-fluid" alt="...">
          </div>
          <div class="mb-3">

            <button class="btn bg-purple" style="width: 15rem ">Lihat buku</button>
        </div>
        </div>
        <div class="col-md-3">
            <div class="card" style="width: 15rem;">
            <img src={{'images/buku1.jpg'}} class="card-img-top img-fluid" alt="...">
          </div>
          <div class="mb-3">

            <button class="btn bg-purple" style="width: 15rem ">Lihat buku</button>
        </div>

        </div>

    </div>

   </div>
   {{-- endtrending --}}
   @endsection





        {{-- End Hero --}}

        {{-- border about --}}










    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html> --}}
