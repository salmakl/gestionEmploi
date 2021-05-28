<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/gestionEmploi/view/bootstrap/css/bootstrap.css">
    <link href="http://localhost/gestionEmploi/view/bootstrap/css/bootsrap-grid.css" rel="stylesheet" />
    <link href="http://localhost/gestionEmploi/view/bootstrap/css/bootsrap.min.css" rel="stylesheet" />
    <link href="http://localhost/gestionEmploi/view/bootstrap/css/bootsrap-reboot.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://localhost/gestionEmploi/view/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  
    <title>Document</title>
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
          
        </li>
        <li class="nav-item">
          
        </li>
       
      </ul>
      <span class="navbar-text">
     <?php echo'<p> <i class="fas fa-user-alt"></i> '.$_SESSION["prenom"].'</b></p>';?>
     <a href="http://localhost/gestionEmploi/logout/"><i class="fas fa-sign-out-alt"></i></a>
     

      </span>
    </div>
</nav>


    <form action="http://localhost/gestionEmploi/user/Ajouter" method="post">
    <div class="form-group row">  

    <select class="form-select form-select-lg col-2" aria-label=".form-select-lg example" name="salle">
          <option selected>Séléctionnez une salle</option>
    <?php
foreach($resSalle as $row){

    echo '    
          <option value="'.$row["idSalle"].'">'.$row["libelle"].'</option>

        ';
 } ?>
 </select>
 <div class="line" style="color:red;"><?=$errorSalle?></div>
 <select class="form-select form-select-lg col-2" aria-label=".form-select-sm example" name="groupe">
          <option selected>Séléctionnez un groupe</option>
 <?php
foreach($resGroupe as $row){

    echo '    
          <option value="'.$row["idGroupe"].'">'.$row["libelleGroupe"].'</option>

        ';
 } ?>
 
        </select>

        <div class="line" style="color:red;"><?=$errorG?></div>
  
    <label for="example-date-input" class="col-form-label">Date</label>
    <div class="col-2">
      <input class="form-control" type="date" value="" name="date" id="example-date-input">
    </div>
  </div>
  <div class="line" style="color:red;"><?=$errorD?></div>

  <div class="form-group col-md-6">
                <label for="inputState">Heure Debut</label>
                <select id="inputState" class="form-control" name="heureDebut">
                  <option selected>Choose...</option>
                  <option>08:00</option>
                  <option>10:00</option>
                  <option>14:00</option>
                  <option>16:00</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">Heure Fin</label>
                <select id="inputState" class="form-control"  name="heureFin">
                  <option selected>Choose...</option>
                  <option>10:00</option>
                  <option>12:00</option>
                  <option>16:00</option>
                  <option>18:00</option>
                </select>
              </div>
              <div class="line" style="color:red;"><?=$err?></div>

<button type="submit">Réserver</button>

    </form>

</body>
</html>