<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <title>Edit Data Mahasiswa</title>
</head>
<body>
    <div class="container my-5">
        <div class="card shadow p-4 mx-auto"style="max-width: 800px; border-radius: 12px;">
            <h3 class="text-center fw-bold text-success">Form Edit </h3>
            <h5 class="text-center mb-4"style="color: #8a2be2;">Universitas Bina Nusantara</h5>
            <form action="{{ route('postedit',$mahasiswa->id) }}" method="POST" >
                @csrf
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">NIK</label>
                        <input type="number" value="{{ $mahasiswa->user->nik }}" name="nik" class="form-control border-dark">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text"value="{{ $mahasiswa->user->name }}" name="nama_lengkap" class="form-control border-dark">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Jenis Kelamin</label>
                        <input type="text" value="{{ $mahasiswa->jenis_kelamin}}" name="jenis_kelamin" class="form-control" readonly>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Agama</label>
                        <input type="text" value="{{ $mahasiswa->agama }}" class="form-control" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Tempat Lahir</label>
                        <input type="text"
                               name="tempat_lahir"
                               value="{{ $mahasiswa->tempat_lahir ?? '' }}"
                               class="form-control border-dark" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">Tanggal Lahir</label>
                        <input type="date"
                               name="tanggal_lahir"
                               value="{{ $mahasiswa->tanggal_lahir ?? '' }}"
                               class="form-control border-dark" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">No HP</label>
                        <input type="number"
                               name="no_hp"
                               value="{{ $mahasiswa->no_hp ?? '' }}"
                               class="form-control border-dark" required>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-bold">Lulusan Tahun</label>
                        <input type="number"
                               name="lulusan_tahun"
                               value="{{ $mahasiswa->lulusan_tahun ?? '' }}"
                               class="form-control border-dark" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Alamat Lengkap</label>
                    <input type="text"
                           name="alamat"
                           value="{{ $mahasiswa->alamat ?? '' }}"
                           class="form-control border-dark" required>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('riwayat') }}"class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit" class="btn btn-success">
                        Simpan Perubahan
                    </button>
                </div>

            </form>
        </div>
    </div>

    <script src="/bootstrap.bundle.min.js"></script>
</body>
</html>