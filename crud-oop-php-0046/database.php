<?php 
    class Database{
        //properti
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $database = "db_php0046";
        public $connect;

        function __construct()
        {
            $this->connect = mysqli_connect($this->host, $this->username, $this->password);
            mysqli_select_db($this->connect, $this->database);
                // pengujian koneksi
                // if($this->connect->connect_error){
                //     die ("Koneksi gagal : " . $this->connect->connect_error);
                // }
                // echo "Koneksi Berhasil";
        }

        function tampilData(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_user0046" );
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            // var_dump($rows);
            return $rows;
        }

        function tambahData($nama, $alamat, $jns_kelamin, $nohp, $foto){
            mysqli_query($this->connect, "INSERT INTO tb_user0046 (nama, alamat, jns_kelamin, nohp, foto) VALUES ('$nama', '$alamat', '$jns_kelamin', '$nohp', '$foto')" );
        }        

        function editData($id){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_user0046 WHERE id=$id");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            return $rows;
        }

        function updateData($id, $nama, $alamat, $jns_kelamin, $nohp){
            mysqli_query($this->connect, "UPDATE tb_user0046 SET nama = '$nama', alamat = '$alamat', jns_kelamin = '$jns_kelamin', nohp = '$nohp' WHERE tb_user0046.id = '$id'");
        }

        function hapusData($id){
            mysqli_query($this->connect, "DELETE FROM tb_user0046 WHERE tb_user0046.id = '$id'");
        }


    }

?>