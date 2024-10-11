<?php 
require_once "mahasiswa.php";


$mahasiswa1 = new Mahasiswa("Khamdanu Syakir", "23.240.0046", 3.78, "Teknik Informatika", "3P41");
$mahasiswa1->infoMahasiswa();

echo PHP_EOL; 


$mahasiswa2 = new Mahasiswa("Andi Santoso", "23.240.0050", 3.45, "Sistem Informasi", "3P21");
$mahasiswa2->infoMahasiswa();
?>
