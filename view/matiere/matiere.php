<?php
require __DIR__.'/../../controller/MatiereController.php'
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/gestionEmploi/view/bootstrap/css/bootstrap.css">
	<title>Matieres</title>
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
          <a class="nav-link" href="http://localhost/gestionEmploi/home/salle">Salle <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/gestionEmploi/home/groupe">Groupe</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/gestionEmploi/home/matiere">Matière</a>
        </li>
      </ul>
      <span class="navbar-text">
        
      </span>
    </div>
</nav>
      <div class="navbar-wrapper">
                <a class=" btn btn-primary pull-right" href="#">ADD SALLE</a>
      </div>

      <div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Ajouter une Salle</div>
 				
 				<div class="card-body bg-light">
 					
 					<form method="post" action="http://localhost/gestionEmploi/Matiere/create" >
                     
 						<div class="form-group">
 							<label for="libellesalle">Libelle Matière</label>
 							<input type="text" name="libelleMatiere" class="form-control" placeholder="Libelle Salle">
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
      
      <th scope="col">ID Matière</th>
      <th scope="col">Libelle</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
<?php
  $matiere=new MatiereController;
  $table=$matiere->read();
 
  foreach($table as $data){
  
    // echo $row;
    echo '<tr>
    <td>'.$data['idMatiere'].'</td>
    <td>'.$data['libelleMatiere'].'</td>
    
    <td><a href="http://localhost/gestionEmploi/matiere/edit/'.$data['idMatiere'].'"  class="btn btn-info">Edite</a> <a href="http://localhost/gestionEmploi/matiere/delete/'.$data['idMatiere'].'" class="btn btn-danger">Delete</a></td>
  </tr>';
  }
  
?>
    

  </tbody>
</table>
</body>
</html>