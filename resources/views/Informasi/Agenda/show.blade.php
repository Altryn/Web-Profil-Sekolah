<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda</title>
</head>
<body>
    <h1>Agenda</h1>
    <a href="{{ route('Agenda.index') }}">Back</a>

    
    <div>
        <p><b>{{ $agenda->judul }}</b></p>
        <p><b>{{ $agenda->tanggal_pelaksanaan }}</b></p>
        <p><b>{{ $agenda->isi }}</b></p>
    </div>
</body>
</html>