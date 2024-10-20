<?php 
include 'database.php';
$db = new Database();

$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jns_kelamin = $_POST['jns_kelamin'];
    $nohp = $_POST['nohp'];

    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    
    $uploadDir = "uploads/";
    $uploadFile = $uploadDir . basename($foto);
    
    if(move_uploaded_file($tmp, $uploadFile)) {
        $db->tambahData($nama, $alamat, $jns_kelamin, $nohp, $foto);
        header("location:input.php?status=sukses");
    } else {
        echo "Gagal mengupload foto";
    }

} elseif ($aksi == "update") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $jns_kelamin = $_POST['jns_kelamin'];

    $db->updateData($id, $nama, $alamat, $nohp, $jns_kelamin);
    header("location:edit.php?id=$id&status=sukses");
} elseif($aksi == "hapus"){
    $db->hapusData($_GET['id']);
    header("location:index.php?hapus=sukses");
}
?>
