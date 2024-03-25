
@extends('layouts.main')
@section('title','Login')

@section('content')

<div class="container p-5" style="height: 100%;">
    <div class="row mt-5 bg-light" style="border-radius: 15px" >
        <div class="col-md-7">
            <div class="p-md-3">
                <h2 class="text-center blueold">Rental Buku</h2>
                <p class="text-center blue">Selamat Datang Kembali</p>

            </div>
         <form class="p-md-3">
          <div class="mb-3">
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukan Email">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan Password">
          </div>
          <div class="text-end">
              <a href="" class="text-decoration-none blue">Lupa Password</a>

          </div>
          <div class="text-center">

              <button type="submit" class="btn-blueold ">Masuk</button>
          </div>
        </form>
        <div class="text-center ">

            <a href="/registrasi" class="text-decoration-none blue">Tidak Punya Akun?</a>
        </div>

          </div>
       <div class="col-md-5">
            <img src={{'images/loginphoto.png'}} alt="" style="border-radius: 12px">
       </div>
    </div>
</div>





@endsection
