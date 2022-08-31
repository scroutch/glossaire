<?php

include('bdd.php');

if(((isset($_POST['word'])) && $_POST['word'] != null) && 
((isset($_POST['def'])) && $_POST['def'] != null)) {
    $id = strip_tags($_GET['id']);
    $word = strip_tags($_POST['word']);
    $def = strip_tags($_POST['def']);
    $firstLetter = substr($word, 0 , 1);
    $firstLetter = strtoupper($firstLetter);

    $query = 'UPDATE definition SET word=:word, `definition`=:def, first_letter=:first_letter WHERE id=:id';
    $req = $bdd -> prepare($query);
    $req -> bindValue(':word', $word, PDO::PARAM_STR);
    $req -> bindValue(':def', $def, PDO::PARAM_STR);
    $req->bindValue(':id', $id, PDO::PARAM_INT);
    $req -> bindValue(':first_letter', $firstLetter, PDO::PARAM_STR);
    $req -> execute();

    header('Location: ./index.php?page=5');
}
?>