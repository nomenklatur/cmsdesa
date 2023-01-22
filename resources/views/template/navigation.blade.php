<nav class="navbar navbar-expand-lg rounded sticky-top" style="background-color: #c79c72">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="/">Desa Ringin Putih</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse ms-auto" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link text-light {{Request::is('/') ? 'border-bottom border-3 shadow' : ''}}" href="/">Beranda</a>
        <li class="nav-item dropdown">
          <a class="nav-link text-light dropdown-toggle {{Request::is('pemerintahan/*') ? 'border-bottom border-3 shadow' : ''}}" href="#" id="pemerintahanDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pemerintahan Desa
          </a>
          <ul class="dropdown-menu" aria-labelledby="pemerintahanDropDown">
            <li><a class="dropdown-item" href="pemerintahan/visimisi">Visi dan Misi</a></li>
            <li><a class="dropdown-item" href="pemerintahan/struktur">Struktur Pemerintahan</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-light dropdown-toggle {{Request::is('desa/*') ? 'border-bottom border-3 shadow' : ''}}" href="#" id="profilDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profil Desa
          </a>
          <ul class="dropdown-menu" aria-labelledby="profilDropDown">
            <li><a class="dropdown-item" href="desa/geografi">Geografis dan Demografis</a></li>
            <li><a class="dropdown-item" href="desa/sarana">Sarana dan Prasarana</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-light dropdown-toggle {{Request::is('kelembagaan/*') ? 'border-bottom border-3 shadow' : ''}}" href="#" id="kelembagaanDropDown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kelembagaan
          </a>
          <ul class="dropdown-menu" aria-labelledby="kelembagaanDropDown">
            <li><a class="dropdown-item" href="kelembagaan/karangtaruna">Karang Taruna</a></li>
            <li><a class="dropdown-item" href="kelembagaan/pkk">PKK</a></li>
          </ul>
        </li>
        <a class="nav-link text-light" href="#">Data Desa</a>
        @if (!auth()->user())
          <a class="nav-link btn btn-sm text-light ms-2 shadow" href="/masuk" style="background-color: #c79c72">Masuk <i class='bx bx-log-in'></i></a>
        @else
          <a class="nav-link text-light" href="/dashboard">Dashboard</a>
        @endif
      </div>
    </div>
  </div>
  <style>
    .nav-link:hover{
      background-color: beige;
      color: grey;
    }
  </style>
</nav>