<?php 
include('bdd.php');

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = strip_tags($_GET['id']);
    $sql = "SELECT * FROM definition WHERE id=:id;";

    $query = $bdd->prepare($sql);

    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch();
    // var_dump($result);
} 


?>
<div class="container-fluid">
    <div class="col-sm-12 col-md-6 mx-auto">
        <div class="py-5"><h2>Ajouter une définition</h2></div>
        <form action="./update.php?id=<?php echo $_GET['id'] ?>" method="post">
            <div class="mb-3">
                <label for="word">Mot :</label>
                <input type="text" class="form-control" name="word" id="word" value="<?php echo $result['word']?>">
            </div>
            <div class="mb-3">
                <label for="def">Définition :</label>
                <textarea name="def" class="form-control" id="def" cols="30" rows="10"><?php echo $result['definition']?></textarea>
            </div>
            <div class="d-flex flex-row justify-content-center">
            <a href="./update.php?id=<?php echo $_GET['id'] ?>"><button type="submit" class="btn btn-primary">Modifier</button></a>
            </div>
        </form>
    </div>
</div>