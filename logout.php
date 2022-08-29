<?php

    include('bdd.php');

    var_dump($_SESSION);

    session_destroy();
    header('Location: ./index.php?page=1');
    exit;
    var_dump($_SESSION);

?>
