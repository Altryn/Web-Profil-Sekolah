<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Agenda</title>
</head>
<body>
    <h1>Buat Agenda Baru</h1>
    <br>
    <hr>
    
    <a href="{{ route('Agenda.index') }}">Back</a>

    <form action="{{ route('Agenda.store') }}" method="POST">
        @csrf

        <p>
            <label for="">Judul Agenda</label>
            <input type="text" name="judul" >
            @error("judul")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Tanggal Pelaksanaan Agenda</label>
            <input type="date" name="tanggal_pelaksanaan">
            @error("tanggal_pelaksanaan")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Deskripsi Agenda</label>
            <input type="text" name="desc">
            @error("desc")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Isi Agenda</label>
            <textarea name="isi" id="" cols="30" rows="10"></textarea>
            @error("isi")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>

        <input type="submit" value="Submit">
    </form>
</body>
</html>