<?php 
?>

<!doctype html>
<html >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>PSB Online</title>
  </head>
  <body>
    <?php include('partisi/navadmin.php'); ?>

    <div class="container py-4">
    <div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Dashboard</h3>
        <!-- Tombol Tambah Siswa -->
        <a href="tambah_siswa.php" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Tambah Siswa
        </a>
    </div>
         <!-- bagiN  KONTEN WEB -->
        <div class="roe mb-3">
           
            <div class="col-md-12 mx-auto">
              <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Siswa Yang Baru Mendaftar</h4>
                    <?php
                            if(isset($_GET['sukses'])){?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $_GET['sukses'];?>
                                </div>
                            <?php
                            }
                        ?>
                    <table class="table">
                    <thead>
                        <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>NIS</th>
                        <th>Nama Lengkap</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('config/db.php');
                            $sql="select * from siswa";
                            $aksi=$conn->query($sql);
                            $no = 1;
                            while($row = $aksi->fetch_assoc()) {
                        ?>
                        <tr>
                        <th scope="row"><?php echo $no;?></th>
                        <td><?= $row['id_siswa'] ?></td>
                        <td><?= $row['NIS'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['jurusan'] ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td>  <a href="cpendaftar.php" class="btn btn-success" target="blank">EDIT</a>
                    <a href="ependaftar.php" class="btn btn-info" target="blank">HAPUS</a>
                        <?php 
                        $no++;
                            }
                         ?>
                    </tbody>
                    </table>
                </div>
              </div>
            </div>
        </div>
          <!-- BAGIAN PENUTUP KONTEN -->
    </div>
    <?php include('partisi/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

  
  </body>
</html> 