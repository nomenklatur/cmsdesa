@extends('layout/public')

@section('content')
    <div class="container p-3">
      <div class="row mb-3">
        <div class="col-lg-1">
          <img src="/images/logo.png" alt="" class="img-fluid" style="height: 100px; object-fit: contain;">
        </div>
        <div class="col-lg-5">
          <p class="text-uppercase">selamat datang di website resmi</p>
          <h1 class="text-uppercase">desa ringinputih</h1>
        </div>
        <div class="col-lg-6">
          <p><i class='bx bx-user me-2'></i>contact person : +62-899-9902-090</p>
          <p><i class='bx bx-map me-2'></i>Kecamatan Karangdowo, Kabupaten Klaten, Provinsi Jawa Tengah</p>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-8">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner rounded">
              <div class="carousel-item active">
                <img src="https://source.unsplash.com/1600x900/?pedesaan" class="d-block w-100 h-50 img-fluid" alt="..." style="border-radius: 10px">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/1600x900/?indonesia" class="d-block w-100" alt="..." style="border-radius: 10px">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/1600x900/?pasar" class="d-block w-100" alt="..." style="border-radius: 10px">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card" style="width: 18rem;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15814.513936359082!2d110.73358221799909!3d-7.722949597766027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a38ee8140553f%3A0x777205c947ac06d0!2sRinginputih%2C%20Kec.%20Karangdowo%2C%20Kabupaten%20Klaten%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1674467780221!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="card-body">
              <h5 class="card-title">Desa Ringin Putih</h5>
              <p class="card-text">Slogan Desa</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Kepala Desa: </li>
              <li class="list-group-item">Sekretaris: </li>
              <li class="list-group-item">Bendahara: </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-lg-11">
          @foreach ($artikel as $item)
          <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="@if($item->gambar) {{asset('storage/'.$item->gambar)}} @else https://source.unsplash.com/1600x900/?{{$item->judul}} @endif" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$item->judul}}</h5>
                  <p class="card-text">T{{$item->preview}}</p>
                  <p class="card-text"><small class="text-muted">{{$item->created_at->diffForHumans()}}</small></p>
                  <a href="/artikel/{{$item->uri}}" class="text-decoration-none btn btn-sm" style="background-color: #e7bc91">Baca selengkapnya <i class='bx bx-chevron-right'></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <div class="text-center">
            <a href="/artikel" class="text-decoration-none">Lihat artikel lainnya <i class='bx bx-right-arrow-alt'></i></a>
          </div>
        </div>
      </div>
    </div>
@endsection