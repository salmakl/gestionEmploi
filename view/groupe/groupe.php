<?php
require __DIR__.'/../../controller/GroupeController.php'
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/gestionEmploi/view/bootstrap/css/bootstrap.css">
	<title>Groupes</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">E-TEACH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
            <a class="nav-link" href="http://localhost/gestionEmploi/home/salle">Salle </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="http://localhost/gestionEmploi/home/groupe">Groupe <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/gestionEmploi/home/matiere">Matière</a>
        </li>
        </ul>
        <span class="navbar-text">
        
        </span>
    </div>
    </nav>
      <div class="navbar-wrapper">
                <a class=" btn btn-primary pull-right" href="#">Ajouter Groupe</a>
      </div>

      <div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Ajouter un groupe</div>
 				
 				<div class="card-body bg-light">
 					
 					<form method="post" action="http://localhost/gestionEmploi/Groupe/create" >
                     
 						<div class="form-group">
 							<label for="libellesalle">Libelle Groupe</label>
 							<input type="text" name="libelleGroupe" class="form-control" placeholder="Libelle Groupe">
 						</div>
 						<div class="form-group">
 							<label for="capacitesalle">Effectif</label>
 							<input type="number" name="effectif" class="form-control" placeholder="Effectif">
 						</div>
 						
 						<button type="submit" class="btn  btn-primary" name="add">Envoyer</button>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>

	<table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">ID Groupe</th>
      <th scope="col">Libelle</th>
      <th scope="col">Effectif</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
<?php
  $groupe=new GroupeController;
  $table=$groupe->read();
 
  foreach($table as $data){
  
    // echo $row;
    echo '<tr>
    <td>'.$data['idGroupe'].'</td>
    <td>'.$data['libelleGroupe'].'</td>
    <td>'.$data['effectif'].'</td>
    <td><a href="http://localhost/gestionEmploi/groupe/edit/'.$data['idGroupe'].'"  class="btn btn-info">Edite</a> <a href="http://localhost/gestionEmploi/groupe/delete/'.$data['idGroupe'].'" class="btn btn-danger">Delete</a></td>
  </tr>';
  }
  
?>
    

  </tbody>
</table>
</body>
</html>