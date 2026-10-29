<nav class="nav bg-dark align-items-center px-4 py-2">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <a class="nav-link text-purple-400 fw-bold fs-5" href="#">UNIVERSITAS BINA NUSANTARA</a>
    @auth
        @if(auth()->user()->calonmahasiswa)
            <a class="nav-link text-white" href="{{ route('riwayat') }}">Riwayat pendaftaran</a>
            <a class="nav-link text-white" href="{{ route('pembayaran') }}">Status Pembayaran</a>
        @else
            <a class="nav-link text-white" href="{{ route('fakultas') }}">Fakultas</a>
            <a class="nav-link text-white" href="{{ route('mahasiswaView') }}">Form Pendaftaran</a>
        @endif
    
        <a class="nav-link text-danger" href="{{ route('logout') }}">Logout</a>
    @endauth

    <script src="/bootstrap.bundle.min.js"></script>
</nav>