<?php
include_once('Connection.php');
 
class admin extends Connection{
 
    public function __construct(){
 
        parent::__construct();
    }
 
    public function check_login_Admin($email, $password){
 
        $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$password'";
        $query = $this->connection->query($sql);
 
        if($query->rowCount() > 0){
            $row = $query->fetchAll(PDO::FETCH_ASSOC);
            return $row[0];
        }
        else{
            return false;
        }
    }
 
  
}