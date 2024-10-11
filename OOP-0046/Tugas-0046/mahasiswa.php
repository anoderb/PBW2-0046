<?php 
class Mahasiswa {

    public $nama, $nim, $kelas, $ipk, $prodi;


    public function __construct($nama, $nim, $ipk, $prodi, $kelas) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->ipk = $ipk;
        $this->prodi = $prodi;
        $this->kelas = $kelas;
    }

    public function infoMahasiswa() {
        echo "Nama     : {$this->nama}" . PHP_EOL;
        echo "NIM      : {$this->nim}" . PHP_EOL;
        echo "Kelas    : {$this->kelas}" . PHP_EOL;
        echo "IPK      : {$this->ipk}" . PHP_EOL;
        echo "Prodi    : {$this->prodi}" . PHP_EOL;
    }
}
?>
