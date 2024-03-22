@extends('layouts.main')
@section('title','About')



@section('content')
<div class="container p-5">
    <div class="row">
        <div class="col-7 border border-warning">
          <div class="middle-align " >
              <p><b class="text-white texth1">List Buku</b></p>
               <p><b class="texth3 text-white p-0 mx-2">Daftar buku yang ada  di perpustakaan</b></p>

        </div>
          </div>
       <div class="col-5">
   <div class="">
     <img src={{ asset('images/Photo1.png') }} class="img-fluid" alt="">
   </div>
       </div>
    </div>
</div>
@endsection
