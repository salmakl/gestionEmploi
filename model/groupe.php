<?php
include_once('Connection.php');

class Groupe extends Connection{

    private $idGroupe;
    private $libelleG;
    private $effectif;
     
    public function __construct(){
 
        parent::__construct();
    }

    function SelectGroupById($idGroupe){
        $this->idGroupe=$idGroupe;
       $sql="SELECT * FROM `groupe` where idGroupe=".$this->idGroupe;
       $res=$this->connection;
       $result=$res->query($sql);
       $rst=$result->fetchAll(PDO::FETCH_ASSOC);
     return $rst[0];
   }

   function SelectAll(){
    $sql="SELECT * FROM `groupe`";
    $res=$this->connection;
    $result=$res->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
}

  function deleteGroupe($id){
    $this->id=$id;
    $this->connection->query("DELETE FROM `groupe` WHERE idGroupe=".$this->id);
    
}

 function update($idGroupe,$libelleG,$effectif)
{

    $this->connection->query("UPDATE groupe SET libelleGroupe='$libelleG', effectif='$effectif' WHERE idGroupe=$idGroupe");
   
}

function Insert($libelleG,$effectif)
{
    
    $this->libelleG=$libelleG;
    $this->effectif=$effectif;
    $this->connection->query("INSERT INTO groupe(`libelleGroupe`, `effectif`) VALUES ('$libelleG','$effectif')");
   
}
 
}