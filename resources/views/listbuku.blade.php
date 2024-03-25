@extends('layouts.main')
@section('title','About')



@section('content')

{{-- listbuku --}}
<div class="container mt-md-5 " style="height: 70%;">
    <div class="row ">
        <div class="col-8 mt-5">
           <div class="mt-5">
               <p><b class="text-white texth1">List Buku</b></p>
            </div>
                <p><b class="texth3 text-white">Daftar buku yang ada  di perpustakaan</b></p>

        </div>
        <div class="col-4 mt-5">
    <div class="">
      <img src={{'images/listbuku.png'}} class="img-fluid" alt="">
    </div>
          </div>
       </div>
    </div>
</div>
{{-- end listbuku --}}

{{-- semua buku --}}
<div class="container">
    <div class="row mt-md-2">
        <div class="col-md-8">
            <h1 class="text-white">Semua buku</h1>
            <hr class="lineleft">
        </div>
        <div class="col-md-4 mt-3 ">
            <div class="mx-md-5 text-end">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option selected>Semua</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <label for="floatingSelect">Urutkan Berdasarkan Kategori</label>
                  </div>
            </div>

        </div>
    </div>
<div class="bg-light ">
 <div class="card mb-3 p-md-4 border border-dark mt-md-2 rounded" style="background: #F3F0F0">
  <div class="row">
    <div class="col-md-3">
        <div class="mx-4 border border-dark">
            <img src={{'images/buku1.jpg'}} class="img-fluid" alt="..." width="100%">
        </div>
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h2 class="card-title blueold"> <a href="/detailbuku">Control Your Mind and Master Your Feelings</a> </h2>
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

      </div>
    </div>
  </div>

    </div>



    <div class="card mb-3 p-md-4 border border-dark mt-md-2 rounded" style="background: #F3F0F0">
        <div class="row">
          <div class="col-md-3">
              <div class="mx-4 border border-dark">
                  <img src={{'images/buku1.jpg'}} class="img-fluid" alt="..." width="100%">
              </div>
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h2 class="card-title blue">Control Your Mind and Master Your Feelings</h2>
              <p class="card-text blueold">Buku ini berisikan - berhenti berpikir berlebihan & Kuasai Emosi Anda mengontrol badan</p>
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

            </div>
          </div>
        </div>

          </div>

          <div class="card mb-3 p-md-4 border border-dark mt-md-2 rounded" style="background: #F3F0F0">
            <div class="row">
              <div class="col-md-3">
                  <div class="mx-4 border border-dark">
                      <img src={{'images/buku1.jpg'}} class="img-fluid" alt="..." width="100%">
                  </div>
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <h2 class="card-title blue">Control Your Mind and Master Your Feelings</h2>
                  <p class="card-text blueold">Buku ini berisikan - berhenti berpikir berlebihan & Kuasai Emosi Anda mengontrol badan</p>
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

                </div>
              </div>
            </div>

              </div>


</div>

</div>
{{-- End Semua buku --}}
@endsection
