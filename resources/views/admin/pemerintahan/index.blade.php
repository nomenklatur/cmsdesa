@extends('layout/admin')

@section('content')
    <div class="container card shadow mt-3 mb-3 p-3">
        @if (session()->has('visi_edited'))
          <div class="alert alert-success" role="alert">
            <i class="bi bi-check me-2"></i>{{session('visi_edited')}}
          </div>            
        @endif
      <div class="row mb-3">
        <div class="col-lg-12">
          <!-- Tabs navs -->
          <ul class="nav nav-tabs nav-fill mb-3 mt-3" id="ex1" role="tablist">
            <li class="nav-item" role="presentation">
              <a
                class="nav-link active"
                id="ex2-tab-1"
                data-bs-toggle="tab"
                href="#ex2-tabs-1"
                role="tab"
                aria-controls="ex2-tabs-1"
                aria-selected="true"
                >Pemerintahan Desa</a
              >
            </li>
            <li class="nav-item" role="presentation">
              <a
                class="nav-link"
                id="ex2-tab-2"
                data-bs-toggle="tab"
                href="#ex2-tabs-2"
                role="tab"
                aria-controls="ex2-tabs-2"
                aria-selected="false"
                >Badan Permusyawaratan Desa</a
              >
            </li>
            <li class="nav-item" role="presentation">
              <a
                class="nav-link"
                id="ex2-tab-3"
                data-bs-toggle="tab"
                href="#ex2-tabs-3"
                role="tab"
                aria-controls="ex2-tabs-3"
                aria-selected="false"
                >Visi & Misi Desa</a
              >
            </li>
          </ul>
          <!-- Tabs navs -->

          <!-- Tabs content -->
          <div class="tab-content" id="ex2-content">
            <div
              class="tab-pane fade show active"
              id="ex2-tabs-1"
              role="tabpanel"
              aria-labelledby="ex2-tab-1"
            >
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">

                  </div>
                </div>
              </div>
            </div>
            <div
              class="tab-pane fade"
              id="ex2-tabs-2"
              role="tabpanel"
              aria-labelledby="ex2-tab-2"
            >
              Tab 2 content
            </div>
            <div
              class="tab-pane fade"
              id="ex2-tabs-3"
              role="tabpanel"
              aria-labelledby="ex2-tab-3"
            >
              <div class="container">
                <div class="row mb-3 justify-content-center space-between">
                  <div class="col-lg-5 card m-3" style="border-color: #a47148">
                    <h3 class="text-center">VISI</h3>
                    <p>{{$data[0]->visi}}</p>
                  </div>
                  <div class="col-lg-5 card m-3" style="border-color: #a47148">
                    <h3 class="text-center">MISI</h3>
                    <p>{!!$data[0]->misi!!}</p>
                  </div>
                </div>
                <button type="button" class="btn text-light" data-bs-toggle="modal" data-bs-target="#ubahVisiModal" style="background-color: #a47148">
                  Ubah Visi & Misi
                </button>
              </div>
            </div>
          </div>
          <!-- Tabs content -->
        </div>
      </div>
    </div>
    @include('modals/edit_visi')
@endsection