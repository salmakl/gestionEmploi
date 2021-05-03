<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/gestionEmploi/view/bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    
<div class="container">
 	<div class="row my-4">
 		<div class="col-md-8 mx-auto">
 			<div class="card">
 				<div class="card-header">Modifier une matière</div>
 				
 				<div class="card-body bg-light">
 					
 					<form method="post" action="http://localhost/gestionEmploi/matiere/updateData" >
                        <div class="form-group">
 							
 							<input type="hidden" name="idMatiere" class="form-control" value="<?= $result["idMatiere"] ?>">
 						</div>
 						<div class="form-group">
 							<label for="libellesalle">Libelle Salle</label>
 							<input type="text" name="libelleMatiere" class="form-control" value="<?= $result["libelleMatiere"] ?>">
 						</div>

 						<button type="submit" class="btn  btn-primary" name="edit">Edit</button>
 					</form>
 					
                   
 				</div>
 			</div>
 			
 		</div>
 	</div>
 </div>
</body>
</html>