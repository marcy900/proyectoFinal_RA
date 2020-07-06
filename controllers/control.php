<?php 
require 'models/conexion.php';
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        echo '<div class="alert alert-danger">Nombre de usuario o contraseña vacio</div>';
   }else{
         require './models/login.php';
        $user = new User;
        if($user->getUser($username,$password)){
            header('Location: view/home.php');
        }else{
         echo '<div class="alert alert-danger">Usuario no existe</div>';
        }
    }

}