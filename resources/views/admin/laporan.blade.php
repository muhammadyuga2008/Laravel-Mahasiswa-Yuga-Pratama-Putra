<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="/bootstrap.min.css">
    <title>Laporan</title>
</head>
<body>
    @if (Session::has('status'))
    <div class="text-center"><span style="color:red">{{Session::get('status')}}</span></div>
    @endif
    <form class="p-4">
         <table class="table">
        <thead>
            <tr>
                <th scope="col">no</th>
                <th scope="col">nama</th>
                <th scope="col">fakultas</th>
                <th scope="col">prodi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="row">1</th>
                <td>yuga</td>
                <td>hukum</td>
                <td>ilmu politik</td>
            </tr>
        </tbody>
    </table>

    </form>
</body>
 <script src="/bootstrap.bundle.min.js"></script>
</html>