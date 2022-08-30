<?php

    include('bdd.php');

    var_dump($_SESSION);

    session_unset();
    header('Location: ./index.php?page=1');
    exit;
    var_dump($_SESSION);

?>
