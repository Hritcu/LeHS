<?php
class levelH
{
    
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
    public function Update($username)
{
    $username = strip_tags($username);
    $sql = "SELECT username,password,email,levelH,levels  from TABEL WHERE username = :username";
        $stmt   = $this->db->prepare($sql);
        $result = $stmt->execute(array(":username" => $username));
        $user   = $stmt->fetch(PDO::FETCH_ASSOC);
    $nou=$user['levelH']+1;
    $_SESSION['levelH']=$nou;
    $nouu=$user['levels']+1;
    $sqll = "UPDATE TABEL set levelH = ( :levelH), levels=(:levels) where username= (:username) ";
    $query = $this->db->prepare($sqll);
    $query->execute(array(':levelH' => $nou,':levels' => $nouu,':username' => $username));

}

}