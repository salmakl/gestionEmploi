<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/gestionEmploi/view/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="http://localhost/gestionEmploi/view/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/0407d298dc.js" crossorigin="anonymous"></script>
	<title>SALLE</title>
  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">E-TEACH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/gestionEmploi/salle/">Salle <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/gestionEmploi/groupe">Groupe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/gestionEmploi/matiere">Matière</a>
        </li>
      </ul>
      <span class="navbar-text">
     <?php echo'<p> <i class="fas fa-user-alt"></i> '.$_SESSION["idadmin"].'</b></p>';?>
     <a href="http://localhost/gestionEmploi/logout/"><i class="fas fa-sign-out-alt"></i></a>
     

      </span>
    </div>
</nav>
      <div class="navbar-wrapper">
                
      </div>

      <div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Ajouter une Salle</div>
 				
 				<div class="card-body bg-light">
 					
 					<form method="post" id="form" action="http://localhost/gestionEmploi/Salle/create" >
                     
            <div class="row">
 						<div class="form-group col-md-4 ">
 							<label for="libellesalle">Libelle Salle</label>
 							<input type="text" name="libelle" id="libelle" class="form-control" placeholder="Libelle Salle">
 						</div>
 						<div class="form-group col-md-4">
 							<label for="capacitesalle">Capacite Salle</label>
 							<input type="nom" name="capacite" id="capacite" class="form-control" placeholder="Capacite Salle">
 						</div>
 						
 						<button onclick="addSalle()"><i class="fas fa-plus-square"></i></button>
             <button type="submit" class="btn  btn-primary mb-2 add" name="add">Envoyer</button>
             
             </div>
             
 					</form>
 			
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>

	<table class="table table-striped">
  <thead>
    <tr>
      
 
      <th scope="col">Libelle</th>
      <th scope="col">Capacité</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

    <?php $i=1;
              foreach($table as $data){ ?>
          <form action="http://localhost/gestionEmploi/salle/updateData" method="POST">
                <tr>
                  <td>
                    <input type="hidden" class="form-control" id="idSalle" name="idSalle" value="<?=$data['idSalle']?>">
                    <label id="labelNomSalle<?=$i?>"><?=$data['libelle']?></label>
                    <input type="text" name="libelle" id="nomSalle<?=$i?>" value="<?=$data['libelle']?>" style="display:none">
                  </td>
                  <td>
                    <label id="labelCapaciteSalle<?=$i?>"><?=$data['capacite']?></label>
                    <input type="text" name="capacite" id="capaciteSalle<?=$i?>" value="<?=$data['capacite']?>" style="display:none">
                  </td>
                  <td class="text-center">
                    <a class='btn btn-info btn-xs' onclick="edit(<?=$i?>)" id="editButton<?=$i?>"> Edit</a> 
                    <a href="http://localhost/gestionEmploi/salle/delete/<?=$data['idSalle']?>" id="deleteButton<?=$i?>" class="btn btn-danger btn-xs"> Delete</a>
                    <input type="submit" class='btn btn-success btn-xs' id="saveButton<?=$i?>" name="update" value="Save" style="display:none"> 
                    <a onclick="cancel(<?=$i?>)" class="btn btn-warning btn-xs" id="cancelButton<?=$i?>" style="display:none">Cancel</a>
                  </td>
                </tr>
          </form>
            <?php $i++;} ?>

  </tbody>
</table>
<script src="http://localhost/gestionEmploi/view/js/salle.js"></script>
</body>
</html>