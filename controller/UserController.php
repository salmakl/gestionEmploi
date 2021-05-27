<?php
require_once __DIR__."/../model/salle.php";
require_once __DIR__."/../model/groupe.php";
require_once __DIR__."/../model/user.php";


class UserController {

    function index()
    {
        
        if(isset($_SESSION["iduser"]) && !empty($_SESSION["iduser"]))
        {
                $reservation= new User();
                $resultaffichage = $reservation->readReservation();
                require __DIR__."/../view/user/reservation.php";
        }
        else{
            header('location:http://localhost/gestionEmploi/');
        }
    }

    public function createAccount()
	{
        $inscription= new User();
		if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['cin']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['matiere'])){
			if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['cin']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['matiere'])){
				$nom=$_POST['nom'];
                $prenom=$_POST['prenom'];
                $cin=$_POST['cin'];
                $email=$_POST['email'];
                $password=$_POST['password'];
                $matiere=$_POST['matiere'];
				$a=$inscription->sign_up($nom,$prenom,$cin,$email,$password,$matiere);
                // print_r($a);
                header('location:http://localhost/gestionEmploi/home/reserver');
			}
		}
	}
    function addPage($errorSalle="")
    {
        $salle=new salleModel();
        $groupe=new Groupe();
        $resSalle=$salle->SelectAll();
        $resGroupe=$groupe->SelectAll();
        require __DIR__. "/../view/user/reserver.php";
    }

    public function ajouter()
    {
        $reservation=new User();
        $salle=new salleModel();
        $groupe=new Groupe();
       if(isset($_POST['salle']) && isset($_POST['groupe'])){
           if(!empty($_POST['salle']) && !empty($_POST['groupe']) && !empty($_POST['date']) && !empty($_POST['heureDebut']) && !empty($_POST['heureFin'])){
               $idSalle=$_POST['salle'];
               $idGroupe=$_POST['groupe'];
               $date=$_POST['date'];
               $hd=$_POST['heureDebut'];
               $hf=$_POST['heureFin'];
               $idUser=$_SESSION['iduser'];
               if(($date>=date('Y-m-d'))){
                   $myGroupe=$groupe->SelectGroupById($idGroupe);    
                   $mySalle=$salle->SelectSalle($idSalle);
                   if($myGroupe["effectif"]<=$mySalle["capacite"]){
                       $mySalle1=$salle->disponibilite($idSalle,$hd,$date);
                       print_r($mySalle1);
                       if(isset($mySalle1)){

                           $this->addPage("la salle deja reservée","","la date deja reservée","l'heure deja reservée");
                       }else{
                          $ana= $reservation->reserver($idUser,$idSalle,$idGroupe,$date,$hd,$hf);
                           $this->index();
                       }
                   }            
                   else{
                       $this->index("","la salle ne support pas ce groupe","","");
                    //    header('location:http://localhost/gestionEmploi/user/');
                   }        
               }else{
                   $this->index("","","date non valide","");
               }
           }
       }
      
    }

    function delete($id)
	{
		
		$res=new User;
	 	$res->delete($id);
		header('location:http://localhost/gestionEmploi/user');
	}
}
