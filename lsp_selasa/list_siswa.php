<?php
include 'config/db.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}

$sql = "SELECT * FROM siswa ORDER BY nama ASC";
$result = $conn->query($sql);
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'partisi/navadmin.php';?>
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3>Daftar Siswa</h3>
                <a href="tambah_siswa.php" class="btn btn-primary">Tambah Siswa</a>
            </div>

            <?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data siswa berhasil ditambahkan!
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['update']) && $_GET['update'] == 1): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data siswa berhasil diupdate!
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['delete']) && $_GET['delete'] == 1): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data siswa berhasil dihapus!
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <div class="card shadow-sm">
                <div class="card-body">
                    <?php if ($result && $result->num_rows > 0): ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($row['NIS']) ?></td>
                                        <td><?= htmlspecialchars($row['nama']) ?></td>
                                        <td><?= htmlspecialchars($row['jurusan']) ?></td>
                                        <td><?= htmlspecialchars($row['alamat']) ?></td>
                                        <td>
                                            <a href="edit_siswa.php?nis=<?= $row['NIS'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="hapus_siswa.php?nis=<?= $row['NIS'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php else: ?>
                        <div class="text-center py-4">
                            <p class="text-muted">Tidak ada data siswa.</p>
                            <a href="tambah_siswa.php" class="btn btn-primary">Tambah Siswa Pertama</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if ($result) {
    $result->free();
}
$conn->close();
?>