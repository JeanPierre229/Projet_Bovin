<?php
    $nomPrenoms = null;
    $ville = null;
    $telephone = null;
    $email = null;
    $access = null;
    $inscrit = null;
    $motDePasse = null;
    $motDePasse1 = null;
    $mailError = null;
    $mpError = null;
    if(!empty($_POST) && isset($_POST)){
        if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            $nomPrenoms = check($_POST['nom_prenoms']);
            $ville = check($_POST['ville']);
            $telephone = check($_POST['telephone']);
            $email = check($_POST['email']);
            $access = check($_POST['access']);
            $inscrit = check($_POST['inscrit']);
            $motDePasse = check($_POST['motDePasse']);
            $motDePasse = sha1($motDePasse);
            $motDePasse1 = check($_POST['motDePasse_confirmed']);
            $motDePasse1 = sha1($motDePasse1);

            if($motDePasse == $motDePasse1){
                $connect = new PDO('mysql: host=localhost; dbname=bovin_solution', 'root',"");
                $requete = $connect->prepare("
                    INSERT INTO users(nom_prenoms, ville, tel, mail, mot_passe, access, inscrit)
                    VALUES(?, ?, ?, ?, ?, ?, ?);
                ");
                $requete->execute(
                    array(
                        $nomPrenoms, $_POST['ville'], $_POST['telephone'], $_POST['email'], 
                        $motDePasse, $_POST['access'], $_POST['inscrit'] 
                        )
                );
                header("Location: connexion.php");
            }else{
                $mpError = "Mots de passe non identiques, Rééssayez...";
            }
        }else{
            $mailError = "Votre mail n'est pas valide !";
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
    <title>Inscription - WaxangariLabs</title>
</head>
<style>
    .input_color{
        background-color: rgb(240,240,240);
        border-radius: 15px;
        border: 0;
    }
    .radius_bouton{
        border-radius: 15px; 
    }
</style>
<body>
    <section class="my-5">
        <h1 class="text-center">Inscription à <span class="text-success">BovinSolution</span></h1>
        <div class="container my-5">
            <form action="inscription.php" method="post">
                <div class="row">
                    <div class="col-6">
                        <div class="my-2">
                            <label class="form-label" for="nom_prenoms"><strong>Nom et Prénoms</strong></label>
                            <input class="form-control input_color" type="text" placeholder="Ex : John Doe" name="nom_prenoms" id="nom_prenoms" required>
                        </div>
                        <div class="my-2">
                            <label class="form-label" for="Ville"><strong>Ville</strong></label>
                            <input class="form-control input_color" type="text" placeholder="Saississez la ville où vous résidez" name="ville" id="ville" required>
                        </div>
                        <div class="my-2">
                            <label class="form-label" for="telephone"><strong>Numéro de téléphone</strong></label>
                            <input class="form-control input_color" type="tel" placeholder="Ex : 55555555" name="telephone" id="telephone" required> 
                        </div>
                        <div class="my-2">
                            <label class="form-label" for="email"><strong>Email</strong></label>
                            <input class="form-control input_color" type="text" placeholder="Ex : johndoe@gmail.com" name="email" id="email" required>
                        </div>
                        <?php if($mailError){ ?>
                            <p class="text-danger">
                                <?= $mailError ?>
                            </p>
                        <?php } ?>
                        <div class="my-2">
                            <label class="form-label" for="mot_de_passe"><strong>Mot de passe</strong></label>
                            <input class="form-control input_color" type="password" placeholder="Ex : ******" name="motDePasse" id="mot_de_passe" required>
                        </div>
                        <div class="my-2">
                            <label class="form-label" for="mot_de_passe_confirmed"><strong>Confirmer Mot de passe</strong></label>
                            <input class="form-control input_color" type="password" placeholder="Ex : ******" name="motDePasse_confirmed" id="mot_de_passe_confirmed" required>
                        </div>
                        <?php if($mpError){ ?>
                            <p class="text-danger">
                                <?= $mpError ?>
                            </p>
                        <?php } ?>
                    </div>
                    <div class="col-6">
                        <div class="text-center my-2">
                            <img class="img w-75" src="images/bovin_inscription.png" alt="image sur la page d'inscription">
                        </div>
                        <div class="mx-5">
                            <input type="checkbox" name="access" id="access" required="required" checked>
                            <label for="accepter_condition">J'accepte les termes de confidentialité du site</label>
                        </div>
                        <div class="mx-5">
                            <input type="checkbox" name="inscrit" id="inscrit" required="required" checked>
                            <label for="accepter_newsletter">Je souhaite m'inscrire à la newsletter</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success px-5 radius_bouton">Valider inscription</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
input:t