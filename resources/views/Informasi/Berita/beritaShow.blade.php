<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Buat Berita</h1>
    <a href="{{ route('Berita.index') }}">Back</a>

    
    <div>
        <p><b>{{ $berita->title }}</b></p>
        <p><b>{{ $berita->body }}</b></p>
    </div>
</body>
</html>