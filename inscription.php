<div class="container-fluid col-sm-12 col-md-6 mx-auto">
    <h2 class="py-5">Inscription</h2>
    <form method="post" action="./target_inscription.php">
    <div class="mb-3">
        <label for="mail" class="form-label">Email :</label>
        <input type="email" class="form-control" id="mail" name="mail" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Pseudo : </label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe :</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
