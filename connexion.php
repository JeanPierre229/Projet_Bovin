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
<body>
    <section class="my-5">
        <h1 class="text-center">Connexion à <span class="text-success">BovinSolution</span></h1>
        <div class="container my-5">
            <div class="row">
                <div class="col-6">
                    <form action="submit_inscription.php" method="post">
                        <div class="my-4">
                            <label class="form-label" for="email"><strong>Email</strong></label>
                            <input class="form-control input_color" type="email" placeholder="Ex : johndoe@gmail.com" name="email" id="email" required>
                        </div>
                        <div class="my-4">
                            <label class="form-label" for="mot_de_passe"><strong>Mot de passe</strong></label>
                            <input class="form-control input_color" type="password" placeholder="Ex : ******" name="mot_de_passe" id="mot_de_passe" required>
                        </div>
                        <div class="my-2">
                            <input type="checkbox">
                            <label for="accepter_condition">Rester connecté(e)</label>
                        </div>
                        <div>
                            <p>
                                Vous avez oublié votre mot de passe ? <span><a href="#" class="text-success">Cliquer ici</a></span>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="col-6">
                    <div>
                        <img class="img w-50" src="images/bovin_connexion.png" alt="image sur la page d'inscription">
                    </div>
                </div>
            </div>
            <div>
                <div class="text-center">
                    <button class="btn btn-success px-5 radius_bouton">Me connecter</button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>