@extends('layout/public')

@section('content')
    <div class="container mt-2 card shadow p-2">
      <div class="row">
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
    </div>
@endsection