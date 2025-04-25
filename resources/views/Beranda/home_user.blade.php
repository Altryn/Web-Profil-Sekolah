<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/media/Logo_SMKN_3_JPR-removebg-preview.png" type="image/x-icon">
    <title>SMKN3_JYPR | HOME</title>

    <!-- link css -->
    
    <link rel="stylesheet" href="assets/style/Home/home_isi.css">
    <!-- icon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- header yang isinya navbar -->
    <x-home_header />

    <!-- isi -->
    <main>
        <!-- Section pertama untuk tampilan main pertama setelah navbar -->
        <section class="jumbotron ">
            <div class="jumbotron d-flex align-items-center justify-items-center overlaybg">
                <div class="container">
                    <h1 class="text-light">Selamat Datang di <br>
                        SMK N 3 Jayapura
                    </h1>
                    <p class="text-light">BELAJAR-BEKERJA-BERKARYA</p>
                    
                </div>
            </div>
        </section>

        <!-- Sambutan Kepsek dan Seputar berita -->
        <section id="sambutan-kepsek" class="Sambutan">
            <!-- Sambutan kepsek -->
                <img src="../assets/media/kepala-sekolah.jpeg" height="100" alt="">
                
                <div class="sambutan-kpsk">
                
                    <h1>Sambutan Kepala Sekolah</h1>
                    <p>Puji dan syukur kepada Tuhan Yang Maha Esa yang telah memberikan rahmat dan anugerahNya sehingga website SMK Negeri 3 Teknologi dan Rekayasa Jayapura berhasil diluncurkan dengan suasana yang baru dan modern</p>

                    <button onclick="location.href='../Profile/sambutan_kepala_sekolah.html'" class="read-more">Read More</button>
            </div>
        </section>    

        <!-- Berita -->
        <section class="overlay-news">
                
                <h1>Berita Terbaru</h1>
            
            <div class="berita">
                
                <article class="item-news">
                    <img src="../assets/media/Pameran tjkt.jpeg" height="100" alt="">
                    <h5>Pameran Keahlian dari Jurusan TJKT</h5>
                    <button class="btn-brt">Read More</button>
                </article>  

                <article class="item-news">
                    <img src="../assets/media/Ruangan pk.jpeg" height="100" alt="">
                    <h5>Ruangan Pusat Keunggulan yang dimiliki SMK NEGERI 3</h5>
                    <button class="btn-brt">Read More</button> 
                </article>
                
                <article class="item-news">
                    <img src="../assets/media/Background/Anime-Desktop-Wallpaper-Computer.jpg" height="100" alt="">
                    <h5>berita 3, abcdefghijklmnopqrstuvwxyz</h5>
                    <button class="btn-brt" >Read More</button>
                </article>
            </div>
        </section>



        <!-- Jurusan yang tersedia -->
        <section class="jurusan-trsd">
            <!-- Agak kurang rapi kalo ini, saya bingung nyusunnya biar minimalis gimana hehe:) -->
            <h1>Jurusan Yang Tersedia</h1>
            
        <article>    
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </div>
              </div>
        </article>
        </section>

    </main>

    <!-- Ngambil Template  -->
    <x-home_footer />
</body>
</html>