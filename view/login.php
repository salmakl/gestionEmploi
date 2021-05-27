<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
 
    <link rel="stylesheet" href="http://localhost/gestionEmploi/view/bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="http://localhost/gestionEmploi/login/loginPage" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group mt-3">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group mt-2">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group mt-4">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Login">
                                <a href="http://localhost/gestionEmploi/home/signup"><input type="button" class="btn btn-success" name="inscription" value="Inscription"></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div>
        <img src="" alt="">
        </div>
    </div>
</body>
</html>