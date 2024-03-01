<?php require("entete.php"); ?>

<div class="container card  mt-3 col-md-4">
    <div class="card-header bg-info text-center text-white h4">Connexion</div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" class="form-control" name="mdp">
            </div>
            <button type="submit" name="login" class="btn mt-3 btn-outline-success">Se connecter</button>
        </form>
    </div>
</div>

<?php 
    session_start();

    if (isset($_POST["login"])) {
        extract($_POST);
        if ($email == "admin@gmail.com" && $mdp == "admin") {
            $_SESSION["user"] = [
                "email" => $email,
                "mdp" => $mdp,
            ];

            $_SESSION["email"] = $email;
            $_SESSION["mdp"] = $mdp;

            header("Location: admin.php");
        }
    }
?>