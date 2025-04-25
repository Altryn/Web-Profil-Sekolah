<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Agenda</title>
</head>
<body>
    <h1>Edit Agenda</h1>
    <br>
    <hr>
    
    <a href="{{ route('Agenda.index') }}">Back</a>

    <form action="{{ route('Agenda.update', $agenda->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label for="">Judul Agenda</label>
            <input type="text" name="judul" value="{{ $agenda->judul }}">
            @error("judul")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Tanggal Pelaksanaan Agenda</label>
            <input type="date" name="tanggal_pelaksanaan" value="{{ $agenda->tanggal_pelaksanaan }}">
            @error("tanggal_pelaksanaan")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Deskripsi Agenda</label>
            <input type="text" name="desc" value="{{ $agenda->desc }}">
            @error("desc")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>
        
        <p>
            <label for="">Isi Agenda</label>
            <textarea name="isi" id="" cols="30" rows="10">{{ $agenda->isi }}</textarea>
            @error("isi")
            <p style="color: red">{{ $message }}</p>
            @enderror
        </p>

        <input type="submit" value="Submit">
    </form>
</body>
</html>