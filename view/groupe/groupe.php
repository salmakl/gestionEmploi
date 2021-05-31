<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="http://localhost/gestionEmploi/view/bootstrap/css/bootstrap.css">
<script src="https://kit.fontawesome.com/0407d298dc.js" crossorigin="anonymous"></script>

	<title>Groupes</title>
  <style>
    i {
    background:transparent
  }</style>
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
            <a class="nav-link" href="http://localhost/gestionEmploi/salle/">Salle </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="http://localhost/gestionEmploi/groupe">Groupe <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://localhost/gestionEmploi/matiere">Matière</a>
        </li>
        </ul>
        <span class="">
     <?php echo'<p class="d-inline mr-3" > <i class="d-inline fas fa-user-alt" style=""></i>'.$_SESSION["name"].'</b></p>';?>
     <a href="http://localhost/gestionEmploi/logout/"><i class="fas fa-sign-out-alt"></i></a>
     

      </span>
    </div>
    </nav>
      <div class="navbar-wrapper">
                
      </div>

      <div class="container">
 	<div class="row my-5">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header text-white" style="background: #17a2b8;">Ajouter un groupe</div>
 				
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
 						
 						<button type="submit" class="btn  btn-info" name="add">Envoyer</button>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>

	<table class="table table-striped">
  <thead>
    <tr>
      

      <th scope="col"class="text-center"*>Libelle</th>
      <th scope="col"class="text-center"*>Effectif</th>
      <th scope="col"class="text-center"*>Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php $i=1;
              foreach($table as $data){ ?>
          <form action="http://localhost/gestionEmploi/groupe/updateData" method="POST">
                <tr>
                  <td class="text-center">
                    <input type="hidden" class="form-control" id="idGroupe" name="idGroupe" value="<?=$data['idGroupe']?>">
                    <label id="labelgroupe<?=$i?>"><?=$data['libelleGroupe']?></label>
                    <input type="text" class="text-center" name="libelleGroupe" id="nomGroupe<?=$i?>" value="<?=$data['libelleGroupe']?>" style="display:none">
                  </td>
                  <td class="text-center">
                    <label id="labeleffectifGroupe<?=$i?>"><?=$data['effectif']?></label>
                    <input type="text" class="text-center" name="effectif" id="effectifGroupe<?=$i?>" value="<?=$data['effectif']?>" style="display:none">
                  </td>
                  <td class="text-center">
                    <a class='btn btn-info btn-xs' onclick="edit(<?=$i?>)" id="editButton<?=$i?>"> Edit</a> 
                    <a href="http://localhost/gestionEmploi/salle/delete/<?=$data['idGroupe']?>" id="deleteButton<?=$i?>" class="btn btn-danger btn-xs"> Delete</a>
                    <input type="submit" class='btn btn-success btn-xs' id="saveButton<?=$i?>" name="update" value="Save" style="display:none"> 
                    <a onclick="cancel(<?=$i?>)" class="btn btn-warning btn-xs" id="cancelButton<?=$i?>" style="display:none">Cancel</a>
                  </td>
                </tr>
          </form>
            <?php $i++;} ?>
    

  </tbody>
</table>
<script src="http://localhost/gestionEmploi/view/js/groupe.js"></script>
</body>
</html>