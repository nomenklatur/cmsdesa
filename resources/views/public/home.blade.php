@extends('layout/public')

@section('content')
    <div class="container mt-2 card shadow p-2 mb-3">
      <div class="row mb-3">
        <div class="col-lg-8">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://source.unsplash.com/1600x900/?pedesaan" class="d-block w-100 h-50" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/1600x900/?masyarakat" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/1600x900/?pasar" class="d-block w-100" alt="...">
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
            <img src="https://source.unsplash.com/1600x900/?pedesaan" class="card-img-top" alt="...">
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
                  <a href="/artikel/{{$item->uri}}" class="text-decoration-none btn btn-sm btn-info">Baca selengkapnya <i class='bx bx-chevron-right'></i></a>
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