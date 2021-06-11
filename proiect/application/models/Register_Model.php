<?php
class Register_Model 
{
    
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

public function addUser($name,$username, $email, $password)
    {
        session_start();
        $_SESSION['name'] = $name;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['levelH'] = 1;
        $name = strip_tags($name);
        $username = strip_tags($username);
        $email = strip_tags($email);
        $password = strip_tags($password);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO TABEL(name,username, email, password) VALUES (:name, :username, :email, :password)";
        $query = $this->db->prepare($sql);
        $query->execute(array(':name' => $name, ':username' => $username, ':email' => $email, ':password' => $password));
    }
    public function getAmountOfUsers($username, $email)
    {
        $username = strip_tags($username);
        $email = strip_tags($email);
        $sql = "SELECT COUNT(id) AS numar from TABEL WHERE username='$username' OR email='$email'";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetch()->numar;
    }
    

}