<?php
class Connection_Model
{
    
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
public function verfUser($username,$password)
{
    session_start();
    $username = strip_tags($username);
    $password = strip_tags($password);
    $sql = "SELECT username,password,email  from TABEL WHERE username = :username";
    $stmt   = $this->db->prepare($sql);
    $result = $stmt->execute(array(":username" => $username));
    $user   = $stmt->fetch(PDO::FETCH_ASSOC);
    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['email'] =$user['email'];
        $_SESSION['name'] =$user['name'];
        $_SESSION['levelH']=$user['levelH'];
        return 1;
    } else {
        return 0;
    }
    
 }

}