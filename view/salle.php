
<?php
require_once __DIR__."/../controller/salle.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>SALLE</title>
  <!--     Fonts and icons     -->
  <script src="https://kit.fontawesome.com/bc3854343b.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link href="http://localhost/gestionEmploi/views/bootstrap/css/bootsrap.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body >
  


    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class=" btn btn-primary pull-right" href="#">ADD SALLE</a>
          </div>
          <!-- iconNave -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">liste des salles</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table text-center">
                      <thead class="text-primary ">
                        <th>ID</th>
                        <th>Libeller Salle</th>
                        <th>Capaciter Salle</th>
                        <th >Action</th>
                      </thead>
                      <tbody>
                     
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><a href="salle/edite" class="btn btn-info">Edite</a> <a href="salle/delet/" class="btn btn-danger">Delete</a></td>
                        </tr>
                      
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
      
    </div>