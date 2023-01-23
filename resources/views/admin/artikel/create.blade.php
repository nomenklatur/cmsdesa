@extends('layout/admin')

@section('content')
    <div class="container card shadow mt-3 mb-3 p-3">
      <div class="row mb-3">
        <div class="col-lg-4">
          <h4 class="text-uppercase">tambah artikel</h4>
        </div>
        <div class="col-lg-8 text-end">
          <a href="{{url()->previous()}}" class="text-decoration-none text-danger"><i class="bi bi-arrow-left ms-2"></i> Kembali</a>
        </div>
      </div>
      <div class="row mb-3 justify-content-center">
        <div class="col-lg-10">
          <form action="/admin/article" method="post" enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
              <label for="judul" class="form-label">Judul</label>
              <input type="text" class="form-control" name="judul" placeholder="judul artikel...">
            </div>
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input class="form-control" type="file" name="gambar">
            </div>
            <div class="mb-3">
              <label for="x" class="form-label">Teks</label>
              <input id="x" type="hidden" name="teks">
              <trix-editor input="x"></trix-editor>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn text-white w-100" style="background-color: #a47148"><i class="bi bi-cloud-fill me-2"></i>Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <style>
      trix-toolbar [data-trix-button-group="file-tools"] {
        display:none;
      }
    </style>
    <script>
      document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
      });
    </script>
@endsection