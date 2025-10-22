<?php
include 'config/db.php';

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'partisi/navadmin.php'; ?>

<div class="container py-4">
    <!-- BAGIAN KONTEN WEB -->
    <div class="row mb-3">
        <div class="col-md-7 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="text-center mb-3">Halaman Pendaftaran Siswa Baru</h5>

                    <?php if(isset($_GET['sukses'])): ?>
                        <div class="alert alert-success"><?php echo $_GET['sukses']; ?></div>
                    <?php endif; ?>

                    <?php if(isset($_GET['gagal'])): ?>
                        <div class="alert alert-danger"><?php echo $_GET['gagal']; ?></div>
                    <?php endif; ?>

                    <form action="fungsi/pregistrasi.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">NIS</label>
                            <input type="text" name="NIS" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jurusan</label>
                            <select name="jurusan" class="form-select" required>
                                <option value="">Pilih Jurusan</option>
                                <option value="RPL">RPL</option>
                                <option value="TKJ">TKJ</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat Lengkap</label>
                            <textarea name="alamat" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
