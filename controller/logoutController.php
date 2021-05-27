<?php
 
class logoutController
{

    function index(){
    session_start();
    session_unset();
    session_destroy();
    header('location:http://localhost/gestionEmploi/login/');
    }
    
}