<?php 
    include 'database.php';
    $db = new Database;
    $detail = $db->editData($_GET['id']);  // Ambil data berdasarkan ID
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-3">
        <h1>Edit Pengguna</h1>
        <hr>

        <!-- form edit data -->
        <form method="POST" action="proses.php?aksi=update">
            <?php foreach ($detail as $dataUser) { ?>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dataUser['nama'] ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $dataUser['alamat'] ?>">
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $dataUser['nohp'] ?>">
            </div>
            <div class="mb-3">
                <label for="jns_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" id="jns_kelamin" name="jns_kelamin">
                    <option value="laki-laki" <?php echo ($dataUser['jns_kelamin'] == 'laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                    <option value="perempuan" <?php echo ($dataUser['jns_kelamin'] == 'perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                </select>
            </div>
            <input type="hidden" name="id" value="<?php echo $dataUser['id']; ?>">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <?php } ?>
        </form>
        <!-- Tombol Kembali -->
        <a href="index.php" class="btn btn-secondary mt-3">Kembali</a>
    </div>

    <!-- Modal Notifikasi -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sukses</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Data berhasil diperbarui!
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Script untuk memunculkan modal jika status=success -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      <?php if (isset($_GET['status']) && $_GET['status'] == 'sukses') { ?>
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
      <?php } ?>
    </script>
  </body>
</html>
