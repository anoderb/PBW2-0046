<?php 
include 'database.php';
$db = new Database();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OOP PHP 0046</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-3">
        <h1>CRUD OOP PHP 0046</h1>
        <hr>
        <!-- tombol tambah data  -->
        <a href="input.php" class="btn btn-success">Tambah Data</a>
        <hr>

        <?php if (isset($_GET['hapus']) && $_GET['hapus'] == 'sukses'): ?>
            <script>
                window.onload = function() {
                    var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                    successModal.show();
                };
            </script>
        <?php endif; ?>

        <!-- Modal Notifikasi Berhasil Dihapus -->
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sukses</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Data berhasil dihapus!
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
              </div>
            </div>
          </div>
        </div>

        <!-- tabel untuk menampilkan data user  -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $nomor = 1;
                    foreach ($db->tampilData() as $dataUser) {                                  
                ?>
                <tr>
                    <th scope="row"><?php echo $nomor++; ?></th>
                    <td><?php echo $dataUser['nama']; ?></td>
                    <td><?php echo $dataUser['alamat']; ?></td>
                    <td><?php echo $dataUser['nohp']; ?></td>
                    <td><?php echo $dataUser['jns_kelamin']; ?></td>
                    <td>
                        <!-- Tombol Edit -->
                        <a href="edit.php?id=<?php echo $dataUser['id'] ?>" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Tombol Hapus dengan Modal Konfirmasi -->
                        <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalHapus<?php echo $dataUser['id']; ?>">Hapus</a>

                        <!-- Modal Konfirmasi Hapus -->
                        <div class="modal fade" id="modalHapus<?php echo $dataUser['id']; ?>" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalHapusLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Apakah Anda yakin ingin menghapus data <strong><?php echo $dataUser['nama']; ?></strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <a href="proses.php?id=<?php echo $dataUser['id']; ?>&aksi=hapus" class="btn btn-danger">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tombol Detail -->
                        <a href="detail.php?id=<?php echo $dataUser['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                    </td>
                </tr>
                <?php 
                }  
                ?>
            </tbody>
        </table>
    </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
