<?php
require_once 'Connection.php';
class salleModel extends Connection
{
    private $id;
    private $libelle;
    private $capacite;
 
    function __construct(){
 
        parent::__construct();
    }
    function SelectSalle($id){
         $this->id=$id;
        $sql="SELECT * FROM `salle` where idSalle=".$this->id;
        $res=$this->connection;
        $result=$res->query($sql);
      $rst=$result->fetchAll(PDO::FETCH_ASSOC);
      return $rst[0];
    }
    function SelectAll(){
        $sql="SELECT * FROM `salle`";
        $res=$this->connection;
        $result=$res->query($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

      function deletesalle($id){
        $this->id=$id;
        $this->connection->query("DELETE FROM `salle` WHERE idSalle=".$this->id);
        
    }

     function update($id,$libelle,$capacite)
    {
        // $this->id=$id;
        // $this->libelle=$libelle;
        // $this->capacite=$capacite;
        $this->connection->query("UPDATE salle SET libelle='$libelle', capacite='$capacite' WHERE idSalle=$id");
       
    }

    function Insert($libelle,$capacite)
    {
        
        $this->libelle=$libelle;
        $this->capacite=$capacite;
        $this->connection->query("INSERT INTO salle(`libelle`, `capacite`) VALUES ('$libelle','$capacite')");
       
    }
   
  
}
?>