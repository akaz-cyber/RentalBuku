@extends('layouts.main')
@section('title','Detail buku')

@section('content')


 {{-- hero --}}
 <div class="container p-5">
    <div class="row mt-5 bg-light rounded">
        <div class="col-md-3 text-center p-md-3 border boprder-dark">
            <img src={{'images/buku1.jpg'}} class="img-fluid" alt="..." width="100%">

          </div>
       <div class="col-md-9">
   <div class="">
    <div class="middle-align" >
        <h2 class="card-title blueold"> Control Your Mind and Master Your Feelings</h2>
        <p class="card-text blue">Buku ini berisikan - berhenti berpikir berlebihan & Kuasai Emosi Anda mengontrol badan</p>
        <div class="row">
            <div class="col-md-6 blue">
              <p>by : arichor</p>
            </div>
            <div class="col-md-6 blue">
                <p>kategori : psychological</p>
            </div>
        </div>
        <p class="card-text"><small class="blue">Last updated 3 mins ago</small></p>
        <p class="blue">Seringkali kita melihat ke dunia luar untuk menemukan akar masalah kita. Namun, sering kali, kita harus mencari ke dalam. Pikiran dan emosi kita menentukan keadaan kita saat ini. </p>

    <div class="mt-5 text-center" >

        <button type="button" class="btn btn-primary btn-lg mx-2 rounded-4 shadow" style="width: 100%">Login untuk menyewa buku</button>
    </div>
</div>
   </div>
       </div>
    </div>
</div>
{{-- endhero --}}


@endsection
