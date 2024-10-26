<?php
class User
{
    private $db;

    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
    }


    public function getUserById($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        // Mengikat parameter dengan placeholder dan variabel
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



}

