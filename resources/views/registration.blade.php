@extends('layouts.main')
@section('title','Registration')

@section('content')

<div class="container p-5" >
    <div class="row mt-5 bg-light " style="border-radius: 15px" >
        <div class="col-md-7">
            <div class="p-md-3">
                <h2 class="text-center blueold">Rental Buku</h2>
                <p class="text-center blue">Buat Akun Untuk Menyewa</p>
            </div>
         <form class="p-md-3">
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Masukan Nama">
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Masukan Email">
          </div>
          <div class="mb-3">
            <input type="number" class="form-control" placeholder="Masukan Number Telephon">
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Masukan Alamat Rumah">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" placeholder="Masukan Password">
          </div>
          <div class="">
            <input type="password" class="form-control" placeholder="Konfirmasi Password">
          </div>
          <div class="text-center">

              <button type="submit" class="btn-blueold ">Masuk</button>
          </div>
        </form>
        <div class="text-center">

            <p>Sudah Punya Akun? <a href="/login"> Masuk</a> </p>
        </div>
          </div>
       <div class="col-md-5">
        <div class="">

            <img src={{'images/registerphoto.png'}} alt="" width="100%" height="100%" class="mt-5">

        </div>
       </div>
    </div>
</div>





@endsection
