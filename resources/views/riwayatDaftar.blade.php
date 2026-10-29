<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="/bootstrap.min.css">
    <title>Riwayat</title>
</head>
<body>
    @include('template.nav')
    <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-4">
                <h3 class="text-center fw-bold text-success">Riwayat Pendaftaran Maba</h3>
                <h6 class="text-center mb-4 text-purple" style="color: #8a2be2;">Universitas Bina Nusantara</h6>
                
                @if(Session::has('status'))
                <div class="text-center"> <span style="color: darkorchid">{{Session::get('status')}}</span></div>
                @endif
                <hr>
                    <div class="row mb-2">
                        <div class="col-md-4 font-weight-bold">NIK :</div>
                        <div class="col-md-8">{{ Auth::user()->nik  }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4 font-weight-bold">Nama Lengkap :</div>
                        <div class="col-md-8">{{ Auth::user()->name }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4 font-weight-bold">Jenis Kelamin :</div>
                        <div class="col-md-8">{{ ($mahasiswa->jenis_kelamin) }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4 font-weight-bold">Agama :</div>
                        <div class="col-md-8">{{ ($mahasiswa->agama) }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4 font-weight-bold">Tempat Lahir :</div>
                        <div class="col-md-8">{{ $mahasiswa->tempat_lahir }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4 font-weight-bold">Tanggal Lahir :</div>
                        <div class="col-md-8">{{ $mahasiswa->tanggal_lahir }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4 font-weight-bold">No Hp :</div>
                        <div class="col-md-8">{{ $mahasiswa->no_hp }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4 font-weight-bold">Lulusan Tahun :</div>
                        <div class="col-md-8">{{ $mahasiswa->lulusan_tahun }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4 font-weight-bold">Alamat Lengkap :</div>
                        <div class="col-md-8">{{ $mahasiswa->alamat }}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-4 font-weight-bold">Pilihan Fakultas :</div>
                        <div class="col-md-8">{{ $mahasiswa->programStudi->fakultas->nama_fakultas ?? '-' }}</div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-4 font-weight-bold">Pilihan Program Studi :</div>
                        <div class="col-md-8">{{ $mahasiswa->programStudi->nama_prodi ?? '-' }}</div>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('edit',$mahasiswa->id) }}" class="btn btn-danger px-4">Edit Data</a>
                        <a href="{{ route('pembayaran') }}" class="btn btn-info text-white px-4">Lanjutkan ke pembayaran</a>
                    </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="/bootstrap.bundle.min.js"></script>
</html>