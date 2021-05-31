<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="http://localhost/gestionEmplois/view/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <style>
    .form-container {
    box-shadow: 2px 0px 32px 10px rgba(0, 0, 0, 0.103);
    margin-top: 0vh;
}
.main {
    background: #e7eded;
}

</style>
</head>
<body>
    <div class="container-fluid bg">
        <div class=" main d-flex justify-content-center vh-100 align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form class="form-container bg-white rounded" method="POST" action="http://localhost/gestionEmploi/user/createAccount">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom</label>
                        <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Prenom</label>
                        <input type="text" class="form-control" name="prenom">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">CIN</label>
                        <input type="text" class="form-control" name="cin">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Matiere</label><br>
                        <select class="form-control" name="matiere">
                            <option selected></option>
                            <?php
                                foreach($result as $row){ ?>
                                <option value="<?=$row['idMatiere']?>"><?=$row['libelleMatiere']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a class="" href="http://localhost/gestionEmploi/login/">Login</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>