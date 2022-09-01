<?php

include('bdd.php');

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    $id_user = $_SESSION['id'];
    $query = 'SELECT * FROM definition where id_user = :id_user';
    $req = $bdd->prepare($query);
    $req->bindValue(':id_user', $id_user, PDO::PARAM_INT);
    $req->execute();
?>
    <div class="container py-5">
        <div class="row">
            <table id="gestion" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Mots</th>
                        <th>Définitions</th>
                        <th>Date de création</th>
                        <th>Utilisateurs</th>
                        <th>Actions</th>   
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($result = $req->fetch()) {
                    ?>

                        <tr>
                            <td><?php echo $result['id'] ?></td>
                            <td><?php echo $result['word'] ?></td>
                            <td><?php echo $result['definition'] ?></td>
                            <td><?php echo $result['created_at'] ?></td>
                            <td><?php echo $result['id_user'] ?></td>
                            <td>
                                <a href="./index.php?page=7&id=<?php echo $result['id'] ?>"><i class="bi bi-pencil pe-4 text-warning"></i></a>                          
                                <a href="./index.php?page=6&id=<?php echo $result['id'] ?>"><i class="bi bi-trash text-danger"></i></a>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Mots</th>
                        <th>Définitions</th>
                        <th>Date de création</th>
                        <th>Utilisateurs</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
<?php
}
?>

