<?php
include 'config/db.php';

// Pencarian
$search = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT * FROM siswa";
if ($search != '') {
    $search = $conn->real_escape_string($search);
    $sql .= " WHERE NIS LIKE '%$search%'
                OR nama LIKE '%$search%'
                OR alamat LIKE '%$search'
                OR jurusan LIKE '%$search%'
                OR id_siswa LIKE '%$search%'";
}
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include 'partisi/navbar.php'; ?>

<div class="container mt-4">
    <h3 class="mb-4">Kelola Data Siswa</h3>

    <!-- Pencarian -->
    <form method="GET" class="mb-3">
        <div class="input-group w-50">
            <input type="text" name="search" class="form-control" placeholder="Cari NIS atau Nama..."
                   value="<?= htmlspecialchars($search) ?>">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </form>

    <table class="table table-bordered table-striped table-hover text-center">
        <thead class="table-dark text-center">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>NIS</th>
            <th>Nama Lengkap</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <th scope="row" class="text-center"><?= $no ?></th>
                    <td><?= $row['id_siswa'] ?></td>
                    <td><?= $row['NIS'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['jurusan'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                </tr>
                <?php
                $no++;
            }
        } else {
            echo '<tr><td colspan="6" class="text-center">Data tidak ditemukan</td></tr>';
        }
        ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
