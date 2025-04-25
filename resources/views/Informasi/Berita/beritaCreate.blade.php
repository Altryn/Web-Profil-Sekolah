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

    <form action="{{ route('Berita.store') }}" method="POST">
        @csrf
           
        <p>
            <label for="">Judul</label> <br>
            <input type="text" name="title">
            @error("title")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        <p>
            <label for="">Deskripsi</label> <br>
            <input type="text" name="excerpt">
            @error("excerpt")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        <p>
            <label for="">Isi</label> <br>
            <textarea name="body" id="form-isi" cols="60%" rows="30"></textarea>
            @error("body")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <input type="submit" value="Submit">
        
    </form>
</body>
</html>