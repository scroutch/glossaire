<?php

include('bdd.php');

$success = false;

if(((isset($_POST['word'])) && $_POST['word'] != null) && 
((isset($_POST['def'])) && $_POST['def'] != null)) {
    $word = $_POST['word'];
    $def = $_POST['def'];
    $firstLetter = substr($word, 0 , 1);
    $firstLetter = strtoupper($firstLetter);
    $id_user = $_SESSION['id'];
    

    $query = 'insert into definition (word, definition, first_letter, id_user) values (:word, :def, :firstLetter, :id_user)';
    $req = $bdd -> prepare($query);
    $req -> bindValue(':word', $word, PDO::PARAM_STR);
    $req -> bindValue(':def', $def, PDO::PARAM_STR);
    $req -> bindValue(':firstLetter', $firstLetter, PDO::PARAM_STR);
    $req -> bindValue(':id_user', $id_user, PDO::PARAM_INT);
    $req -> execute();
    $success = true;

    if($success) {
        ?>
        <div class="alert alert-success" role="alert">
            Définition ajoutée avec succès!
        </div>
<?php
    }else{
        ?>
        <div class="alert alert-danger" role="alert">
            Votre définition n'a pas pu être ajoutée!
        </div>
        <?php
    }
} 
?>

<div class="container-fluid">
    <div class="col-sm-12 col-md-6 mx-auto">
        <div class="py-5"><h2>Ajouter une définition</h2></div>
        <form action="#" method="post">
            <div class="mb-3">
                <label for="word">Mot :</label>
                <input type="text" class="form-control" name="word" id="word">
            </div>
            <div class="mb-3">
                <label for="def">Définition :</label>
                <textarea name="def" class="form-control" id="def" cols="30" rows="10"></textarea>
            </div>
            <div class="d-flex flex-row justify-content-center">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </div>
</div>


