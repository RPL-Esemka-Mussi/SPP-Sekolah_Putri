<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SPP Sekolah</title>
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  @yield('css')
</head>
<body>
    @if(Request::segment(1) == 'login' || Request::segment(1) == 'logout')

    @else
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">SPP Sekolah</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <li class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::segment(1) == '/' ? 'active' : ''}}" aria-current="page" href="{{ url('/')}}">Home</a>
            </li>
                <a class="nav-link {{ Request::segment(1) == 'user' ? 'active' : '' }}" href="{{ url('/user')}}">User</a>
            </li>
            <li>
                <a class="nav-link {{ Request::segment(1) == 'siswa' ? 'active' : '' }}" href="{{ url('/siswa')}}">Siswa</a>
            </li>
            <li>
                <a class="nav-link {{ Request::segment(1) == 'kelas' ? 'active' : '' }}" href="{{ url('kelas')}}">Kelas</a>
            </li>
            <li>
                <a class="nav-link {{ Request::segment(1) == 'spp' ? 'active' : ''}}" href="{{ url('/spp')}}">SPP</a>
            </li>
            <li>
                <a class="nav-link {{ Request::segment(1) == 'pembayaran' ? 'active' : '' }}" href="{{ url('/pembayaran')}}">Pembayaran</a>
            </li>
            <li class="nav-item dropdwon">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                </a>
                 <ul class="dropdown-menu">
                 <li><hr class="dropdown-divider"></li>
                 <li><a class="dropdown-item" href="{{ url('logout') }}">Logout</a></li>
             </ul>
           </li>
        </ul>
      </div>
    </div>
  </nav>
  @endif
  @yield('content')
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
