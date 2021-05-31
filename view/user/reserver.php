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
    <style>
    i {
      background:transparent;
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
        <li class="nav-item active">
        <a class="nav-link "  href="http://localhost/gestionEmploi/user/">reservation</a>
        </li>
        <li class="nav-item">
          
        </li>
       
      </ul>
      <span class="">
      <?php echo'<p class="d-inline mr-3" > <i class="d-inline fas fa-user-alt mr-2" style=""></i>'.$_SESSION["prenom"].'</b></p>';?>
      <a href="http://localhost/gestionEmploi/logout/"><i class="fas fa-sign-out-alt"></i></a>
     

      </span>
    </div>
</nav>

<div class="container">


    <form action="http://localhost/gestionEmploi/user/Ajouter" method="post">
   
      <div class="line" style="color:red;"><?=$errorSalle?></div>
      <div class="line" style="color:red;"><?=$errorG?></div>
      <div class="row py-5">
<div class="col">
<label for="salle" class="col-form-label">Salle</label>
    <select class="form-control w-100" aria-label=".form-select-lg example" name="salle">
          <option selected>Séléctionnez une salle</option>
            <?php
        foreach($resSalle as $row){

            echo '    
                  <option value="'.$row["idSalle"].'">'.$row["libelle"].'</option>

                ';
        } ?>
 </select>
 </div>
 <div class="col">
<label for="salle" class="col-form-label">Groupe</label>
 
 <select class="form-control w-100" aria-label=".form-select-sm example" name="groupe">
          <option selected>Séléctionnez un groupe</option>
 <?php
foreach($resGroupe as $row){

    echo '    
          <option value="'.$row["idGroupe"].'">'.$row["libelleGroupe"].'</option>

        ';
 } ?>
 
        </select>
        </div>
  
    <div class="col">
    <label for="example-date-input" class="col-form-label">Date</label>
      <input class="form-control" type="date" value="" name="date" id="example-date-input">
    </div>
</div>
  <div class="line" style="color:red;"><?=$errorD?></div>
<div class="row">

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

</div>
<button class="btn btn-info" type="submit">Réserver</button>
    </form>
    </div>
</body>
</html>