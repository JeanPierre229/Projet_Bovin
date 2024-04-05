<?php 
    session_start();
    $nom_prenoms = null;
    $mail = null;
    $tel = null;
    $profession = null;
    $id = $_SESSION['id'];
    $errorUpdate = null;
    if(!empty($_POST) && isset($_POST)){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $nom_prenoms = check($_POST['nom_prenoms']);
            $mail = check($_POST['email']);
            $tel = check($_POST['telephone']);
            $profession = check($_POST['profession']);

            $connect = new PDO('mysql: host=localhost; dbname=bovin_solution', 'root', '');
            $requete = $connect->prepare("
                                        UPDATE users
                                        SET nom_prenoms = ?,
                                            mail = ?,
                                            tel = ?,
                                            profession = ?
                                        WHERE id = ?;
            ");
            $requete->execute(
                array(
                    $nom_prenoms, $mail, $tel, $profession, $id
                )
            );
            header('Location: accueil.php');
        }else{
            $errorUpdate = "Votre mail n'est pas valide !";
        }
    }

    function check($donnee){
        $donnee = trim($donnee);
        $donnee = stripslashes($donnee);
        $donnee = htmlspecialchars($donnee);
        return $donnee;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>Complétez Profil - WaxangariLabs</title>
</head>
<style>
    .section{
        height: 100vh;
        background-color: #3498db;
        color: white;
        border-radius: 20px;
    }
    .ctn{
        width: 200px;
        height: 200px;
        border-radius: 50%;
        border: 2px solid #fff;
    }
    .rad{
        border-radius: 10px;
    }
    .row-form{
        border: 0;
        background-color: rgb(238, 238, 238);
        border-radius: 20px;
        height: 20%;
    }
    p{
        color: white;
    }
</style>
<body>
    <section>
        <div class="container b">
            <form action="completer_profil.php" method="post">
                <div class="row">
                    <div class="col-8 my-5">
                        <h1 class="text-center text-success my-5">Complétez votre profil</h1>
                            <div class="my-3">
                                <label class="form-label" for="nom_prenoms">
                                    <i class="fa fa-arrow-right rad bg-success text-light p-1"></i>
                                    <strong>Modifier votre nom et prénoms</strong>
                                </label>
                                <input class="form-control row-form py-3 mx-3" type="text" placeholder="GADO Halila" name="nom_prenoms" id="nom_prenoms" required>
                            </div>
                            <div class="my-3">
                                <label class="form-label" for="nom_prenoms">
                                    <i class="fa fa-arrow-right rad bg-success text-light p-1"></i>
                                    <strong>Modifier votre email</strong>
                                </label>
                                <input class="form-control row-form py-3 mx-3" type="email" placeholder="Ex : johndoe@gmail.com" name="email" id="email" required>
                            </div>
                            <?php if($errorUpdate): ?>
                                <p class="text-danger">
                                    <?= $errorUpdate ?>
                                </p>
                            <?php endif ?>
                            <div class="my-3">
                                <label class="form-label" for="nom_prenoms">
                                    <i class="fa fa-arrow-right rad bg-success text-light p-1"></i>
                                    <strong>Numéro de Téléphone</strong>
                                </label>
                                <input class="form-control row-form py-3 mx-3" type="text" placeholder="57 88 74 11" name="telephone" id="telephone" required>
                            </div>
                            <div class="my-3">
                                <label class="form-label" for="nom_prenoms">
                                    <i class="fa fa-arrow-right rad bg-success text-light p-1"></i>
                                    <strong>Quelle est votre profession ?</strong>
                                </label>
                                <input class="form-control row-form py-3 mx-3" type="text" placeholder="Élévatrice de boeufs" name="profession" id="profession" required>
                            </div>
                    </div>
                    <div class="col-3 bg-secondary section mx-5">
                        <div class="text-center">
                            <img src="images/img-profil.png" alt="Image de profil" class="img ctn my-5">
                            <p><?= $_SESSION['nom_prenoms'] ?></p>
                        </div>
                        <div class="mx-3">
                            <p>
                                <?= $_SESSION['ville'] ?>
                            </p>
                            <p>
                                <?= $_SESSION['mail'] ?>
                            </p>
                            <p>
                                <?= $_SESSION['tel'] ?>
                            </p>
                            <p>
                                <?= $_SESSION['profession'] ?>
                            </p>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success text-dark">Modifier Informations</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>