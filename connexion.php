<?php
    session_start();
    $userId = null;
    $errorConnect = null;

    if(!empty($_POST) && isset($_POST)){ 
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $connect = new PDO('mysql: host=localhost; dbname=bovin_solution', 'root', '');
            $requete = $connect->prepare("SELECT * FROM users");
            $requete->execute();
            $users = $requete->fetchAll();

            foreach ($users as $user) {
                if (
                    $user['mail'] === $_POST['email']
                    && $user['mot_passe'] === sha1($_POST['motDePasse'])
                ) {
                    $_SESSION['nom_prenoms'] = $user['nom_prenoms'];
                    $_SESSION['mail'] = $user['mail'];
                    $_SESSION['ville'] = $user['ville'];
                    $_SESSION['tel'] = $user['tel'];
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['profession'] = $user['profession'];
                    header("Location: accueil.php");
                }else{
                    $errorConnect = "Identifiants incorrects !";
                }
            }
        }else{
            $errorConnect = "Votre mail n'est pas valide !";
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>Connexion - WaxangariLabs</title>
</head>
<style>
    .row-form{
        border: 0;
        background-color: rgb(238, 238, 238);
        border-radius: 20px;
        height: 20%;
    }
    .img-form{
        width: 60%;
        height: 60%;
    }
</style>
<body>
    <section class="my-5">
        <div class="container my-5">
            <h1 class="text-center">Connexion à <span class="text-success">BovinSolution</span></h1>
            <form action="connexion.php" method="post">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                            <?php if($errorConnect){ ?>
                                <p class="alert alert-danger mt-5">
                                    <?= $errorConnect ?>
                                </p>
                            <?php } ?>
                            <div class="mb-4">
                                <label class="form-label" for="email"><strong>Email</strong></label>
                                <input class="form-control row-form py-3" type="text" placeholder="Ex : johndoe@gmail.com" name="email" id="email" required>
                            </div>
                            <div class="mt-2 mb-4">
                                <label class="form-label" for="mot_de_passe"><strong>Mot de passe</strong></label>
                                <input class="form-control row-form py-3" type="password" placeholder="Ex : ******" name="motDePasse" id="mot_de_passe" required>
                            </div>
                            <div class="my-2">
                                <input type="checkbox" name="connect" id="connect">
                                <label for="connect">Rester connecté(e)</label>
                            </div>
                            <div>
                                <p>
                                    Vous n'avez pas encore un compte ? <span><a href="inscription.php" class="text-success">S'inscrire !</a></span>
                                </p>
                                <p>
                                    Vous avez oublié votre mot de passe ? <span><a href="#" class="text-success">Cliquer ici</a></span>
                                </p>
                            </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div>
                            <img class="img img-form" src="images/bovin_connexion.png" alt="image sur la page d'inscription">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="text-center">
                        <button class="btn btn-success px-5 text-dark radius_bouton form-control col-4"><strong>Me connecter</strong></button>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>