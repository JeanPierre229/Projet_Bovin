<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>Complétez Profil - WaxangariLabs</title>
</head>
<style>
    .ctn{
        width: 200px;
        height: 200px;
        border-radius: 50%;
        border: 2px solid #fff;
    }
    p{
        color: white;
    }
</style>
<body>
    <section>
        <div class="container b">
            <div class="row">
                <div class="col-8 my-5">
                    <h1 class="text-center text-success">Complétez votre profil</h1>
                    <form action="submit_inscription.php" method="post">
                        <div class="my-3">
                            <label class="form-label" for="nom_prenoms">
                                <i class="fa fa-arrow-right bg-success text-light p-1"></i>
                                <strong>Modifier votre nom et prénoms</strong>
                            </label>
                            <input class="form-control input_color" type="text" placeholder="GADO Halila" name="nom_prenoms" id="nom_prenoms" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="nom_prenoms">
                                <i class="fa fa-arrow-right bg-success text-light p-1"></i>
                                <strong>Modifier votre email</strong>
                            </label>
                            <input class="form-control input_color" type="email" placeholder="Ex : johndoe@gmail.com" name="email" id="email" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="nom_prenoms">
                                <i class="fa fa-arrow-right bg-success text-light p-1"></i>
                                <strong>Numéro de Téléphone</strong>
                            </label>
                            <input class="form-control input_color" type="text" placeholder="57 88 74 11" name="telephone" id="telephone" required>
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="nom_prenoms">
                                <i class="fa fa-arrow-right bg-success text-light p-1"></i>
                                <strong>Quelle est votre profession ?</strong>
                            </label>
                            <input class="form-control input_color" type="text" placeholder="Élévatrive de boeufs" name="profession" id="profession" required>
                        </div>
                    </form>
                </div>
                <div class="col-3 bg-secondary">
                    <div class="text-center">
                        <img src="images/img-profil.png" alt="Image de profil" class="img ctn">
                        <p>GADO Halila</p>
                    </div>
                    <div class="mx-3">
                        <p>
                            Parakou, Bénin
                        </p>
                        <p>
                            example@gmail.com
                        </p>
                        <p>
                            +229 55 55 00 00
                        </p>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-success text-dark">Modifier Informations</button>
                    </div>


                </div>
            </div>
            
        </div>
    </section>
    
</body>
</html>