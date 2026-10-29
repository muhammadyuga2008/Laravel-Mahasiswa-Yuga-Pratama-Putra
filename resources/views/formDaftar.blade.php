<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <title>Form Daftar</title>
</head>
<body>

    @include('template.nav')

    @if(Session::has('status'))
        <div class="text-center">
            <span style="color: rgb(104, 204, 50)">
                {{ Session::get('status') }}
            </span>
        </div>
    @endif

    <div class="container my-5">
        <div class="card shadow p-4 mx-auto"style="max-width: 800px; border-radius: 12px;">
        <h3 class="text-center fw-bold text-success">Form Pendaftaran Maba</h3>
        <h6 class="text-center mb-4 text-purple" style="color: #8a2be2;">Universitas Bina Nusantara</h6>

            <form action="{{ route('postmahasiswa') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">NIK</label>
                        <input type="text"value="{{ Auth::user()->nik ?? '' }}" name="nik" 
                         class="form-control text-center border-dark"required readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text"value="{{ Auth::user()->name ?? '' }}" name="name"  
                        class="form-control text-center border-dark"required readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Jenis Kelamin</label>
                        <select name="jenis_kelamin"class="form-control border-dark" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">Agama</label>
                        <select name="agama"class="form-control border-dark" required>
                            <option value="">-- Pilih Agama --</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="khonghucu">Khonghucu</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Tempat Lahir</label>
                        <input type="text"name="tempat_lahir"class="form-control border-dark"required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">Tanggal Lahir</label>
                        <input type="date"name="tanggal_lahir"class="form-control border-dark"required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">No Hp</label>
                        <input type="text"name="no_hp"class="form-control border-dark"required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">Lulusan Tahun</label>
                        <input type="number"name="lulusan_tahun"class="form-control border-dark"required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12">
                        <label class="form-label fw-bold">Alamat Lengkap</label>
                        <input type="text"name="alamat"class="form-control border-dark"required>
                    </div>
                </div>

               <div class="row mb-3">
    <div class="col-md-6">
        <label class="form-label fw-bold">Fakultas Pilihan</label>
        <input type="text" value="{{ $prodi->fakultas->nama_fakultas }}" class="form-control border-dark bg-light" readonly>
    </div>
    <div class="col-md-6">
        <label class="form-label fw-bold">Program Studi Pilihan</label>
        <input type="hidden" name="program_studi_id" value="{{ $prodi->id }}">
        <input type="text" value="{{ $prodi->nama_prodi }}" class="form-control border-dark bg-light" readonly>
    </div>
    </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('fakultas') }}" class="btn btn-danger">Kembali</a>
                
                        <button type="submit"class="btn btn-success px-5">
                        Daftar
                        </button>
    
                </div>

            </form>

        </div>
    </div>

    <script src="/bootstrap.bundle.min.js"></script>

</body>
</html>