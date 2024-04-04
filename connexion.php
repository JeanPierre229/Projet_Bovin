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
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <form action="submit_inscription.php" method="post">
                        <div class="mt-5 mb-4">
                            <label class="form-label" for="email"><strong>Email</strong></label>
                            <input class="form-control row-form py-3" type="email" placeholder="Ex : johndoe@gmail.com" name="email" id="email" required>
                        </div>
                        <div class="mt-2 mb-4">
                            <label class="form-label" for="mot_de_passe"><strong>Mot de passe</strong></label>
                            <input class="form-control row-form py-3" type="password" placeholder="Ex : ******" name="mot_de_passe" id="mot_de_passe" required>
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
        </div>
    </section>
</body>
</html>