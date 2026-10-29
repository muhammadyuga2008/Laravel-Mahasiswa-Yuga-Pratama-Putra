<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <title>Form Pembayaran</title>
</head>
<body>
    <form action="" method="POST">

    <div class="container my-5">
        <div class="card shadow p-4 mx-auto" style="max-width: 650px; border-radius: 12px;">
            
             <h3 class="text-center fw-bold text-success">Form Pembayaran Maba</h3>
             <h6 class="text-center mb-4 text-purple" style="color: #8a2be2;">Universitas Bina Nusantara</h6>

            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="border rounded p-3 mb-3 bg-white">
                    <div class="row mb-2">
                        <div class="col-4 fw-bold text-secondary">Nama Lengkap</div>
                        <div class="col-8">: {{auth()->user()->name}}</div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 fw-bold text-secondary">Fakultas</div>
                        <div class="col-8">: {{$mahasiswa->programstudi->fakultas->nama_fakultas}}</div>
                    </div>
                    <div class="row">
                        <div class="col-4 fw-bold text-secondary">Program Studi</div>
                        <div class="col-8">: {{$mahasiswa->programstudi->nama_prodi}}</div>
                    </div>
                </div>
                <div class="border rounded p-3 mb-3 bg-white">
                    <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
                        <span class="fw-bold text-dark">Rincian Pembayaran :</span>
                        <span class="fw-bold">Total : <span class="text-primary">Rp {{ number_format($mahasiswa->programstudi->biaya_formulir + $mahasiswa->programstudi->almamater + $mahasiswa->programstudi->pembangunan, 0, ',', '.') }}</span></span>
                    </div>
                    <div class="d-flex justify-content-between mb-2 text-muted small">
                        <span>Biaya Formulir & Seleksi</span>
                        <span>Rp{{number_format($mahasiswa->programstudi->biaya_formulir)}}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2 text-muted small">
                        <span>Almamater</span>
                        <span>Rp{{number_format($mahasiswa->programstudi->almamater)}}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3 text-muted small">
                        <span>Pembangunan</span>
                        <span>Rp{{number_format($mahasiswa->programstudi->pembangunan)}}</span>
                    </div>

                    <div class="bg-light p-2 rounded small text-dark border">
                        <strong>Transfer ke Rekening Resmi Kampus:</strong><br>
                        <strong>Bank BCA: 123-456-7890 a.n. Universitas Bina Nusantara</strong>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label fw-bold small text-secondary">Unggah Foto / PDF Bukti Transfer</label>
                    <input type="file" name="bukti_transfer" class="form-control form-control-sm" required>
                    <div class="form-text text-muted" style="font-size: 11px;">
                        Format yang diperbolehkan: JPG, PNG, atau PDF (Maksimal 2MB)
                    </div>
                </div>

                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('riwayat') }}" class="btn btn-danger px-4 rounded-pill fw-bold text-white" style="background-color: #b00020;">Kembali</a>
                    <button type="submit" class="btn px-4 rounded-pill fw-bold text-white" style="background-color: #20c997;">Selesaikan Pembayaran</button>
                </div>
            </form>
        </div>
    </div>
    </form>
</body>
<script src="/bootstrap.bundle.min.js"></script>
</html>