<?php
require_once 'Connection.php';
class User
{
    private $id;
    private $email;
    private $password;
    private $db;

    function __construct(){
        $this->db=new Connection();
    }
    function read($email,$password){
        $this->email=$email;
        $this->password=$password;
        $this->db->query("SELECT * FROM `admin` WHERE email='".$this->email."' AND password='".$this->password."'");
        $this->db->execute();
        if($this->db->singleligne()==1){
            return $this->db->selectAll();
        }
    }
}
?>