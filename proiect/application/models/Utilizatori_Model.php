<?php
class Utilizatori_Model 
{
    
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    public function getAllUsers()
    {
        $sql = "SELECT id,username,levels FROM TABEL ORDER BY levels DESC";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

}