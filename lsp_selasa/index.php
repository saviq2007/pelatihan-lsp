<?php
//session_start();
//if (!isset($_SESSION['username'])) {
  //  header("Location: login.php");
    //exit();
//}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sekolah</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
<?php include 'partisi/navbar.php'; ?>

  <section class="hero">
    <div class="hero-text">
      <h1>Sistem Informasi Manajemen Siswa</h1>
      <p>Kelola data siswa dengan mudah, cepat, dan efisien menggunakan sistem CRUD berbasis web.</p>
    </div>
    <div class="hero-image">
      <img src="assets/img/hero.png" alt="Ilustrasi CRUD">
    </div>
  </section>
<br>
  <main>
    <section class="grid-section" aria-label="daftar konten">
    <h3>Berita Terbaru</h3>
        <div class="grid">    
           
            <article class="card" role="article">
            <img src="assets/img/2.jpeg" alt="logo">
            <div class="card-body">
                <h3>RPL</h3>
                <p>berhasil meretas situs pemerintah china</p>
                <a href="" class="btn">BACA</a>
            </div>

        </article>
        <article class="card" role="article">
            <img src="assets/img/2.jpeg" alt="logo">
            <div class="card-body">
                <h3>RPL</h3>
                <p>berhasil meretas situs pemerintah china</p>
                <a href="" class="btn">BACA</a>
            </div>

        </article>
        <article class="card" role="article">
            <img src="assets/img/2.jpeg" alt="logo">
            <div class="card-body">
                <h3>RPL</h3>
                <p>berhasil meretas situs pemerintah china</p>
                <a href="" class="btn">BACA</a>
            </div>

        </article>
</div>
    </section>
  </main>

 
  <?php include 'partisi/footer.php'; ?>
</body>
</html>
