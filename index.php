<?php

include('bdd.php');

?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <title>Glossaire</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg text-bg-info fs-3 font-monospace" style="background:linear-gradient(10deg,#84F5E4,#8DE3F5,#CFA8F5)">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?page=1">
                    <img src="./src/codeBarre.png" alt="" width="200" height="50">
                    <h1 class="text-light">Glossaire</h1>
                </a>
                <ul class="nav mx-auto">
                    <li class="nav-item me-5">
                        <a class="nav-link active text-dark" aria-current="page" href="index.php?page=1">
                            <i class="bi bi-house-fill pe-4"></i>Home
                        </a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link text-dark" href="index.php?page=2">
                            <i class="bi bi-plus-square pe-4"></i>Ajouter
                        </a>
                    </li>
                    <?php if (!isset($_SESSION['id'])) { ?>
                        <li class="nav-item me-5">
                            <a class="nav-link text-dark" href="index.php?page=3">
                                <i class="bi bi-person-fill pe-4"></i>Login
                            </a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item me-5">
                            <a class="nav-link text-dark" href="index.php?page=5">
                                <i class="bi bi-card-list pe-4"></i>Gestion
                            </a>
                        </li>
                        <li class="nav-item me-5">
                            <a class="nav-link text-dark" href="./logout.php">
                                <i class="bi bi-person-fill pe-4"></i>Se déconnecter
                            </a>
                        </li>
                    <?php

                    } ?>


                </ul>
            </div>
        </nav>
    </header>
    <?php

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == 1) {
            include('./home.php');
        } else if ($page == 2) {
            include('./add.php');
        } else if ($page == 3) {
            include('./connect.php');
        } else if ($page == 4) {
            include('./inscription.php');
        } else if ($page == 5) {
            include('./gestion.php');
        } else if ($page == 6) {
            include('./form_gestion.php');
        } else if ($page == 7) {
            include('./form_update.php');
        }
    } else {
        include('./home.php');
    }

    ?>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script src="./js/app.js"></script>
</body>

</html>