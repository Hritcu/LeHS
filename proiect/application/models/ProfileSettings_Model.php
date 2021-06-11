<?php
class ProfileSettings_Model
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
        $username = strip_tags($username);
        $password = strip_tags($password);
        $sql = "SELECT username,password,email  from TABEL WHERE username = :username";
        $stmt   = $this->db->prepare($sql);
        $result = $stmt->execute(array(":username" => $username));
        $user   = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $user['password'])) {
            return 1;
        } else {
            return 0;
        }
        
     }
     public function change($username,$password,$name, $email,$new_password, $rnew_password)
    {
        session_start();
        $username = strip_tags($username);
        $password = strip_tags($password);
        $email = strip_tags($email);
        $name = strip_tags($name);
        $new_password = strip_tags($new_password);
        $rnew_password = strip_tags($rnew_password);
        $sql = "SELECT id,name from TABEL WHERE username = :username ";
        $stmt   = $this->db->prepare($sql);
        $result = $stmt->execute(array(":username" => $username));
        $user   = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!empty($new_password))
        {
        if($new_password==$rnew_password)
        {
        $new_password = password_hash($new_password, PASSWORD_DEFAULT);
        $sqll = "UPDATE TABEL set password = ( :password) where id= (:id) ";
        $query = $this->db->prepare($sqll);
        $query->execute(array(':password' => $new_password,':id' => $user['id']));
        }}
        if(!empty($name))
        {
        $_SESSION['name'] = $name;
        $sqll = "UPDATE TABEL set name = ( :name) where id= (:id) ";
        $query = $this->db->prepare($sqll);
        $query->execute(array(':name' => $name,':id' => $user['id']));
        }
        if(!empty($email))
        {
        $_SESSION['email'] = $email;
        $sqll = "UPDATE TABEL set email = ( :email) where id= (:id) ";
        $query = $this->db->prepare($sqll);
        $query->execute(array(':email' => $email,':id' => $user['id']));
        }
        
     }
public function Update($filename,$tempname,$username)
{
    $filename = strip_tags($filename);
    $tempname = strip_tags($tempname);
    $username = strip_tags($username);
    $sql = "UPDATE TABEL set filename=(:filename) where username = (:username)";
    $stmt   = $this->db->prepare($sql);
    $result = $stmt->execute(array(":filename" => $filename,":username" => $username));
    if (move_uploaded_file($tempname, __DIR__."/uploads/".$filename))  {
        return 1;
    }else{
        return 0;
  }
    
 }
 public function afisare($username)
{
    $username = strip_tags($username);
    $sql = "SELECT filename  from TABEL WHERE username = :username";
    $stmt   = $this->db->prepare($sql);
    $result = $stmt->execute(array(":username" => $username));
    $user   = $stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION['filename'] = $user['filename'];
    
 }

}