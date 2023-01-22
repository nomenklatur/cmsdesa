<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <span class="fs-4">Halo, {{auth()->user()->name}}</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto fs-5 sticky-top">
    <li class="nav-item">
      <a href="/dashboard" class="nav-link link-dark @if($title === 'Beranda') bg-danger text-light @endif">
        <i class="bi bi-house-door me-2"></i>Beranda
      </a>
    </li>
    <li class="nav-item">
      <a href="/admin/article" class="nav-link link-dark @if($title === 'Daftar Artikel') bg-danger text-light @endif">
        <i class="bi bi-file-earmark-post me-2"></i>Artikel
      </a>
    </li>
    <li>
      <a href="/biodata/" class="nav-link link-dark @if($title === 'Biodata Siswa') bg-danger text-light @endif">
        <i class="bi bi-flag me-2"></i>Pemerintahan
      </a>
    </li>
    <li>
      <a href="/data-ibu/" class="nav-link link-dark @if($title === 'Data Ibu Siswa') bg-danger text-light @endif">
        <i class="bi bi-geo-alt me-2"></i>Profil Desa
      </a>
    </li>
    <li>
      <a href="/data-ayah/" class="nav-link link-dark @if($title === 'Data Ayah Siswa') bg-danger text-light @endif">
        <i class="bi bi-people me-2"></i>Kelembagaan
      </a>
    </li>
    <li>
      <a href="/data-wali/" class="nav-link link-dark @if($title === 'Data Wali Siswa') bg-danger text-light @endif">
        <i class="bi bi-clipboard-data me-2"></i>Data Desa
      </a>
    </li>
  </ul>
  <div class="dropdown fixed-bottom" style="bottom: 20px; left: 30px">
    <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="/images/avatar.png" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>{{auth()->user()->name}}</strong>
    </a>
    <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
      <li><a class="dropdown-item" href="/password/">Ganti Password</a></li>
      <li><hr class="dropdown-divider"></li>
      <li>
        <form action="/keluar" method="POST">
          @csrf
          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right me-1"></i>Keluar</button>
        </form>
      </li>
    </ul>
  </div>
</div>