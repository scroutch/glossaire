<?php

include('bdd.php');

$inscription = false;

if((isset($_POST['mail']) && $_POST['mail'] != null) &&
(isset($_POST['username']) && $_POST['username'] != null) && 
(isset($_POST['password']) && $_POST['password'] != null)) {
    $mail = $_POST['mail'];
    $username = strip_tags($_POST['username']);
    $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // var_dump($_POST);

    $query = 'insert into user (mail, username, password) values (:mail, :username, :password)';
    $req = $bdd -> prepare($query);
    $req -> bindValue(':mail', $mail, PDO::PARAM_STR);
    $req -> bindValue(':username', $username, PDO::PARAM_STR);
    $req -> bindValue(':password', $hash, PDO::PARAM_STR);
    $req -> execute();
    $inscription = true;


    if($inscription) {
        
        echo'   <div class="alert alert-success" role="alert">
                    Merci pour votre inscription!
                </div>';

        header('refresh: 3; url=./index.php?page=1');
    
    }else{
        
        echo '  <div class="alert alert-danger" role="alert">
                    Inscription échouée
                </div>';

        header('refresh: 3; url=./index.php?page=4');

    }
}
?>