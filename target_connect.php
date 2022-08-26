<?php

include('bdd.php');

if((isset($_POST['username']) && $_POST['username'] != null) && 
(isset($_POST['password']) && $_POST['password'] != null)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // var_dump($_POST);
    $query = 'SELECT * FROM user where username = :username';
    $req = $bdd->prepare($query);
    $req->bindValue(':username', $username, PDO::PARAM_STR);
    $req->execute();
    $result = $req->fetch();

    if(!empty($result)) {
        if(password_verify($password, $result['password'])) {
            $_SESSION['username'] = $result['username'];
            header('Location=./index.php?page=1');
        } else {
            echo 'Mot de passe incorrect';
            header('refresh: 2; url=./index.php?page=3');
        }
    } else {
        echo 'Identifiant incorrect';
        header('refresh: 2; url=./index.php?page=3');
    }
}