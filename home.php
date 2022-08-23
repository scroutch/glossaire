<p class="fst-italic col-sm-9 col-md-6 col-lg-3 mx-auto py-5">
    Cette page n'est autre qu'un glossaire regroupant les termes techniques 
    de l'informatique, des languages de programmation utilisés par un 
    développeur. Ces définitions seront utiles aussi bien pour sa propre 
    culture informatique que pour le passage du Titre Professionnel.<br>
    Ce glossaire sera alimenté tout au long de la formation grâce au
    formulaire d'ajout.<br>
    voici donc un outil simple d'utilisation pour l'ajout comme pour l'accès
    aux définitions...
</p>
<?php
    $tabNav = range('A', 'Z');
    $compteur = 1;
    
?>

    <nav aria-label="..." class="col-lg-12 mx-auto">
        <ul class="d-flex flex-wrap pagination pagination-md p-5 justify-content-center">
    <?php
        foreach($tabNav as $alphabet){
    ?>     
            <li class="page-item"><a class="page-link" href="index.php?page=1&first_letter=<?= $alphabet ?>"><?= $alphabet ?></a></li>
    <?php
        }
    ?>
        </ul>
    </nav>

<?php

if(isset($_GET['first_letter']) && $_GET['first_letter'] != null) {
    $lettre = $_GET['first_letter'];
    // echo $lettre;
    $query = 'SELECT * FROM definition where first_letter like :lettre ';
    $query = $bdd->prepare($query);
    $query->bindValue('lettre', $lettre, PDO::PARAM_STR);
    $query->execute();
    while($result = $query->fetch()) {
        // var_dump($result);
    ?>
    <div class="container-fluid">
        <div class="col-sm-12 col-md-6 col-lg-3 mx-auto accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading<?= $compteur ?>">
                    <button class="accordion-button text-bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $compteur ?>" aria-expanded="true" aria-controls="collapse<?= $compteur ?>" >
                        <?= $result['word'] ?>
                    </button>
                </h2>
                <div id="collapse<?= $compteur ?>" class="accordion-collapse collapse" aria-labelledby="heading<?= $compteur ?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <?= $result['definition'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php 
    $compteur++;
    }
}
?>


