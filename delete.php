<?php

include('bdd.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = strip_tags($_GET['id']);
    $sql = "DELETE FROM definition WHERE id=:id;";

    $query = $bdd->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    header('Location: index.php?page=5');
}
