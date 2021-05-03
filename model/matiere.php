<?php
include_once('Connection.php');

class Matiere extends Connection{

    private $idMatiere;
    private $libelleM;
   
     
    public function __construct(){
 
        parent::__construct();
    }

    function SelectMatiereById($idMatiere){
        $this->idMatiere=$idMatiere;
       $sql="SELECT * FROM `matiere` where idMatiere =".$this->idMatiere;
       $res=$this->connection;
       $result=$res->query($sql);
       $rst=$result->fetchAll(PDO::FETCH_ASSOC);
     return $rst[0];
   }

   function SelectAll(){
    $sql="SELECT * FROM `matiere`";
    $res=$this->connection;
    $result=$res->query($sql);
    return $result->fetchAll(PDO::FETCH_ASSOC);
}

  function deleteMatiere($id){
    $this->id=$id;
    $this->connection->query("DELETE FROM `matiere` WHERE idMatiere=".$this->id);
    
}

 function update($idMatiere,$libelleM)
{

    $this->connection->query("UPDATE matiere SET libelleMatiere='$libelleM' WHERE idMatiere=$idMatiere");
   
}

function Insert($libelleM)
{
    
    $this->libelleM=$libelleM;
    $this->connection->query("INSERT INTO matiere(`libelleMatiere`) VALUES ('$libelleM')");
   
}
 
}