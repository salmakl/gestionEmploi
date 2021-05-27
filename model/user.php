<?php
require_once 'Connection.php';
session_start();
class User extends Connection
{
  
    public function __construct(){
 
        parent::__construct();
    }
    public function check_login_User($email, $password){
 
        $sql = "SELECT * FROM enseignant WHERE email = '$email' AND password = '$password'";
        $query = $this->connection->query($sql);
 
        if($query->rowCount() > 0){
            $row = $query->fetchAll(PDO::FETCH_ASSOC);
            return $row[0];
        }
        else{
            return false;
        }
    }

    public function sign_up($nom,$prenom,$cin,$email,$pwd,$matiere)
    {
        $sql="INSERT INTO enseignant (`nom`, `prenom`, `cin`, `email`, `password`,`idMatiere`) VALUES ('$nom','$prenom','$cin','$email','$pwd',$matiere)";
        $query = $this->connection->query($sql);
    }

    public function reserver($user,$salle,$groupe,$date,$hd,$hf)
    {

        // print_r($groupe);
        $sql="INSERT INTO `cours`(idEnseignant,idGroupe,idSalle,date,heureDebut,heureFin) VALUES ($user,$groupe,$salle,'$date','$hd','$hf')";
        $query = $this->connection->query($sql);
        // echo $sql;
    }



    public function readReservation(){
        $idE=$_SESSION['iduser'];
        $sql="SELECT cours.id,enseignant.nom,enseignant.prenom,groupe.libelleGroupe,salle.libelle,cours.date,cours.heureDebut,cours.heureFin FROM  enseignant,groupe,salle,cours WHERE cours.idEnseignant=enseignant.idEnseignant AND cours.idGroupe=groupe.idGroupe AND cours.idSalle=salle.idSalle AND cours.idEnseignant =$idE";
        $res=$this->connection;
        $result=$res->query($sql);
        if($result){
        $rst=$result->fetchAll(PDO::FETCH_ASSOC);
        return $rst;
    }
        
    } 

    public function delete($id)
    {
        $this->id=$id;
        $this->connection->query("DELETE FROM `cours` WHERE id=".$this->id);
    }
}
?>