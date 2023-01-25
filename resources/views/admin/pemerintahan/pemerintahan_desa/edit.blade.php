@extends('layout/admin')

@section('content')
    <div class="container card shadow mt-3 mb-3 p-3">
      <div class="row justify-content-center mb-3">
        <div class="col-lg-10">
          <form action="/admin/pegawai/{{$data->uri}}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" value="{{$data->nama}}" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Juniar Budiarto">
              @error('nama')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="jabatan" class="form-label">Pangkat/Jabatan</label>
              <input type="text" value="{{$data->jabatan}}"class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" name="jabatan" placeholder="Kepala Bagian Hubungan Masyarakat">
              @error('jabatan')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <button class="btn w-100 text-light" style="background-color: #a47148" type="submit"><i class="bi bi-cloud me-2"></i>Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
@endsection