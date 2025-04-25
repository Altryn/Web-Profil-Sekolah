<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pengumuman</title>
</head>
<body>
    <h1>Edit Pengumuman</h1>
    <br>
    <hr>
    
    <a href="{{ route('pengumuman.index') }}">Back</a>

    <form action="{{ route('pengumuman.update', $pengumuman->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label for="">Judul Pengumuman</label>
            <input type="text" name="judul" value="{{ $pengumuman->judul }}">
            @error("judul")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Tanggal Pengumuman</label>
            <input type="date" name="tanggal" value="{{ $pengumuman->tanggal }}">
            @error("tanggal")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Deskripsi Pengumuman</label>
            <input type="text" name="desc" value="{{ $pengumuman->desc }}">
            @error("desc")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Isi Pengumuman</label>
            <textarea name="isi" id="" cols="30" rows="10">{{ $pengumuman->isi }}</textarea>
            @error("isi")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>

        <input type="submit" value="Submit">
    </form>
</body>
</html>