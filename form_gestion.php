<div class="container py-5 d-flex justify-content-center">
    <div class="row">
        <form action=./delete.php" method="post">
            <p>Etes vous sur de vouloir supprimer ?</p>
            <button type="reset" class="btn btn-secondary" onclick="history.back()">Annuler</button>
            <a href="./delete.php?id=<?php echo $_GET['id'] ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
        </form>
    </div>
</div>
