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
            <div class="row">
                <div class="col-6">
                    <form action="submit_inscription.php" method="post">
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
                            <input class="form-control input_color" type="text" placeholder="Ex : 55555555" name="telephone" id="telephone" required> 
                        </div>
                        <div class="my-2">
                            <label class="form-label" for="email"><strong>Email</strong></label>
                            <input class="form-control input_color" type="email" placeholder="Ex : johndoe@gmail.com" name="email" id="email" required>
                        </div>
                        <div class="my-2">
                            <label class="form-label" for="mot_de_passe"><strong>Mot de passe</strong></label>
                            <input class="form-control input_color" type="password" placeholder="Ex : ******" name="mot_de_passe" id="mot_de_passe" required>
                        </div>
                        <div class="my-2">
                            <label class="form-label" for="mot_de_passe_confirmed"><strong>Confirmer Mot de passe</strong></label>
                            <input class="form-control input_color" type="password" placeholder="Ex : ******" name="mot_de_passe_confirmed" id="mot_de_passe_confirmed" required>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <div class="text-center">
                        <img class="img w-75" src="images/bovin_inscription.png" alt="image sur la page d'inscription">
                    </div>
                    <div>
                        <input type="checkbox">
                        <label for="accepter_condition">J'accepte les termes de confidentialité du site</label>
                    </div>
                    <div>
                        <input type="checkbox">
                        <label for="accepter_newsletter">Je souhaite m'inscrire à la newsletter</label>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-success px-5 radius_bouton">Valider inscription</button>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>
</html>