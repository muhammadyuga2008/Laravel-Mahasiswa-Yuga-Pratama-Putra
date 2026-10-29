<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="/bootstrap.min.css">
    <title>Fakultas</title>
</head>
<body>
    @include('template.nav')
    <div class="container">
          @if(Session::has('status'))
            <div class="text-center"> <span style="color: rgb(50, 204, 53)">{{Session::get('status')}}</span></div>
        @endif
        <div class="row">
            @foreach ($fakultas as $data)
            <div class="col-4 md-4 p-4">
            <div class="card p-4">
                <img src="{{ $data->foto }}" class="card-img-top">
                <h4 class="title">{{$data->nama_fakultas}}</h4>
                <p class="text">Pilih Prodi</p>
                <form action="{{ route('mahasiswaView') }}" method="GET">
                <select name="program_studi_id" class="form-control">
                        @foreach ($data->programStudi as $prodi)
                            <option value="{{ $prodi->id }}">{{$prodi->nama_prodi}}</option>
                        @endforeach
                </select> 
                        <div class="d-flex p-4">
                            <button type="submit" class="btn btn-primary">Daftar</button>
                        </div>
                </form>
            </div>  
            </div>
            @endforeach
        </div>
    </div>
</body>
    <script src="/bootstrap.bundle.min.js"></script>
</html>