<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STM | Videos</title>

    <link rel="stylesheet" href="../assets/style/Galeri/video.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    
    <x-home_header />

    <section class="judul poppins">
        <h3>Video Sekolah</h3>
    </section>

    <main>

        <section class="main-vid">
            <article class="video">
                <video src="../assets/media/VID-20250303-WA0002.mp4" controls muted autoplay></video>
                <h3 class="judul-vid">Judul Disini</h3>
            </article>
        </section>

        <section class="vid-list">
            <article class="vids active">
                <video src="../assets/media/VID-20250303-WA0002.mp4"></video>
                <h3 class="judul-vid">Judul</h3>
            </article>
            <article class="vids">
                <video src="../assets/media/VID-20250303-WA0002.mp4"></video>
                <h3 class="judul-vid">Judul</h3>
            </article>
            <article class="vids">
                <video src="../assets/media/VID-20250303-WA0002.mp4"></video>
                <h3 class="judul-vid">Judul</h3>
            </article>
            <article class="vids">
                <video src="../assets/media/VID-20250303-WA0002.mp4"></video>
                <h3 class="judul-vid">Judul</h3>
            </article>
            <article class="vids">
                <video src="../assets/media/VID-20250303-WA0002.mp4"></video>
                <h3 class="judul-vid">Judul</h3>
            </article>
            <article class="vids">
                <video src="../assets/media/VID-20250303-WA0002.mp4"></video>
                <h3 class="judul-vid">Judul</h3>
            </article>
            <article class="vids">
                <video src="../assets/media/VID-20250303-WA0002.mp4"></video>
                <h3 class="judul-vid">Judul</h3>
            </article>
            <article class="vids">
                <video src="../assets/media/VID-20250303-WA0002.mp4"></video>
                <h3 class="judul-vid">Judul</h3>
            </article>

            <article class="vids">
                <video src="../assets/media/mylivewallpapers.com-Fire-Force.mp4"></video>
                <h3 class="judul-vid">Jududlll</h3>
            </article>
        </section>

    </main>

    <x-home_footer />

    <script>
        let listVid = document.querySelectorAll('.vid-list .vids');
        let mainVid = document.querySelector('.main-vid video');
        let judul = document.querySelector('.main-vid .judul-vid');

        listVid.forEach(video =>{
            video.onclick = () =>{
                listVid.forEach(vids => vids.classList.remove('active'));
                video.classList.add('active');
                if(video.classList.contains('active')){
                    let src = video.children[0].getAttribute('src');
                    mainVid.src = src;
                    let text = video.children[1].innerHTML;
                    judul.innerHTML = text;
                };
            };
        });
    </script>
</body>
</html>