<?php 
include 'database.php';
$db = new Database;
$detail = $db->editData($_GET['id']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-3">
        <h1>Detail Pengguna</h1>
        <hr>
        <?php foreach ($detail as $dataUser) { ?>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="uploads/<?php echo $dataUser['foto']; ?>" class="img-fluid rounded-start" alt="Foto Pengguna">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dataUser['nama']; ?></h5>
                        <p class="card-text">Alamat: <?php echo $dataUser['alamat']; ?></p>
                        <p class="card-text">Jenis Kelamin: <?php echo $dataUser['jns_kelamin']; ?></p>
                        <p class="card-text">No HP: <?php echo $dataUser['nohp']; ?></p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Tombol Kembali -->
        <a href="index.php" class="btn btn-secondary">Kembali</a>
        <?php } ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>