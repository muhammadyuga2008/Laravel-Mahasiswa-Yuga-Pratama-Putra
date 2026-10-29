<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <title>Form Login</title>
</head>
<body>
    <form action="{{ route('postlogin') }}" method="POST">
    @csrf
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 shadow-sm border-dark" style="width: 380px; border-radius: 12px;">
        
        <h3 class="text-center fw-bold text-success">Form Login</h3>
        <h6 class="text-center mb-4 text-purple" style="color: #8a2be2;">Universitas Bina Nusantara</h6>
         @if(Session::has('status'))
            <div class="text-center"> <span style="color: rgb(50, 204, 53)">{{Session::get('status')}}</span></div>
        @endif
        <div class="mb-3">
            <label class="form-label fw-bold">NIK :</label>
            <input type="text" name="nik" class="form-control border-dark" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-bold">Password :</label>
            <input type="password" name="password" class="form-control border-dark" required>
        </div>

       <button type="submit" class="btn btn-primary">Login</button>
        <div class="text-center pt-3 small">
            belum punya akun? <a href="{{ route('registrasi') }}" class="text-decoration-none fw-bold text-success">Daftar</a>
        </div>
    </div>
</div>
    
</form>
    
    
</body>
<script src="/bootstrap.bundle.min.js"></script>
</html>