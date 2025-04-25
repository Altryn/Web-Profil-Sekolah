<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STM | Daftar Guru</title>

    <link rel="stylesheet" href="../assets/style/Profil/daftar_guru.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/assets/style/Home/home_header.css">
    <link rel="stylesheet" href="/assets/style/Home/home_footer.css">
    
</head>
<body>

    <x-home_header />

    <main>
    <h1>Daftar Guru</h1>
        <a href="{{ route('daftarGuru.index') }}">Back</a>

        <section class="guru">
            <p><b>{{ $guru->nip }}</b></p>
            <p><b>{{ $guru->nama }}</b></p>
            <p><b>{{ $guru->jabatan }}</b></p>
            <p><b>{{ $guru->mapel }}</b></p>
        </section>
    </main>

    <x-home_footer />
</body>
</html>