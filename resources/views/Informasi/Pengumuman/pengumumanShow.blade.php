<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengumuman {{ $pengumuman->id }}</title>
</head>
<body>
    <h1>Pengumuman</h1>
    <a href="{{ route('Pengumuman.index') }}">Back</a>

    
    <div>
        <p><b>{{ $pengumuman->judul }}</b></p>
        <p><b>{{ $pengumuman->tanggal }}</b></p>
        <p><b>{{ $pengumuman->isi }}</b></p>
    </div>
</body>
</html>