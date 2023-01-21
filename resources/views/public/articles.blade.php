@extends('layout/public')

@section('content')
  <div class="container card shadow mt-3 p-3 mb-3">
    <div class="row mt-3 mb-3 text-center">
      <h3 class="text-uppercase">artikel seputar desa ringin putih</h3>
      <a href="/" class="text-decoration-none text-danger"> <i class='bx bx-left-arrow-alt'></i>Kembali</a>
    </div>
    <div class="row mb-3 justify-content-center p-3">
      <div class="card bg-dark text-white">
        <img src="@if($artikel[0]->gambar) {{$artikel[0]->gambar}} @else https://source.unsplash.com/1200x400/?{{$artikel[0]->judul}} @endif" class="card-img" alt="..." style="height: 400px; object-fit: contain">
        <div class="card-img-overlay">
          <div style="background-color: #333333; opacity: 0.8;">
            <h5 class="card-title"><a href="/artikel/{{$artikel[0]->uri}}}" class="text-white">{{$artikel[0]->judul}}</a></h5>
            <p class="card-text">{{$artikel[0]->preview}}</p>
            <p class="card-text">{{$artikel[0]->created_at->diffForHumans()}}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-3 justify-content-center">
      @for ($i = 1; $i < count($artikel); $i++)
      <div class="col-lg-4 mb-3 h-100">
        <div class="card" style="width: 18rem;">
          <img src="@if($artikel[$i]->gambar) {{$artikel[$i]->gambar}} @else https://source.unsplash.com/1600x900/?{{$artikel[$i]->judul}} @endif" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text fw-bold">{{$artikel[$i]->judul}} </p>
            <small class="d-block text-muted">{{$artikel[$i]->created_at->diffForHumans()}}</small>
            <a href="/artikel/{{$artikel[$i]->uri}}" class="text-decoration-none">Selengkapnya <i class='bx bx-right-arrow-alt'></i></a>
          </div>
        </div>
      </div>
      @endfor
    </div>
  </div>
@endsection