<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Pengumuman</title>
</head>
<body>
    <h1>Buat Pengumuman Baru</h1>
    <br>
    <hr>
    
    <a href="{{ route('Pengumuman.index') }}">Back</a>

    <form action="{{ route('Pengumuman.store') }}" method="POST">
        @csrf

        <p>
            <label for="">Judul Pengumuman</label>
            <input type="text" name="judul" >
            @error("judul")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Tanggal Pengumuman</label>
            <input type="date" name="tanggal">
            @error("tanggal")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Deskripsi Pengumuman</label>
            <input type="text" name="desc">
            @error("desc")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Isi Pengumuman</label>
            <textarea name="isi" id="" cols="30" rows="10"></textarea>
            @error("isi")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>

        <input type="submit" value="Submit">
    </form>
</body>
</html>