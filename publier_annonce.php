<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <title>Publier_annonce - WaxangariLabs"</title>
</head>
<style>
    textarea{
        border: none;
        border-radius: 20px;
        background-color: rgb(238, 238, 238);
    }
    .input{
        border: none;
        border-radius: 20px;
        background-color: rgb(238, 238, 238);
        height: 50px;
        
    }
    .but{
        border-radius: 20px;
    }
</style>
<body class="container">
    <!-- 
        l'en-tete de la page
    -->
    <header>
        <?php require_once(__DIR__.'/header.php') ?>
    </header>

    <!-- 
        corps de page
    -->
    <main class="row m-3">
        <section class="col-5 p-1">
            <img src="images/Image (29).png" alt="Une image de profil" class="img w-100 mb-5">
            <strong class="">Petite description de la publication</strong>
            <textarea class="mt-4 p-4" name="description" id="description" cols="40" rows="5" placeholder="Cliquer ici pour décrire"></textarea>
        </section>

        <section class="col-7 mt-5">
            <h4 class="text-center">
                Publiez une annonce sur notre site afin de gagner en visibilité 
                sur vos services
            </h4>
            <form action="#" method="post">
                <h3><legend class="text-center text-success mt-4">FORMULAIRE DE PUBLILCATION</legend></h3>
                <div class="mt-4">
                    <label for="titre_publication" class="form-label">
                        <strong>Titre de la publication</strong>
                    </label>
                    <input type="text" class="form-control input py-4" placeholder="Ex: Formation en élévage de poisson">
                </div>
                <div class="mt-2 mt-4">
                    <label for="titre_publication" class="form-label">
                        <strong>Votre Nom et Prénoms</strong>
                    </label>
                    <input type="text" class="form-control input py-4" placeholder="Ex: John Doe">
                </div>
                <div class="row mt-2 mt-4">
                    <div class="col-8"><strong>Importer une photo pour la publication</strong></div>
                    <div class="col-2"><button class="btn btn-success py-0 but" id="import-file">Import</button></div>
                    <input type="file" name="fichier" id="fichier" style="display: none;">
                </div>
                <div class="text-center mt-4">
                    <button class="btn btn-success px-5 but">Valider la publication</button>
                </div>
            </form>
        </section>
    </main>

    <hr>

    <!-- 
        pied de page
    -->
    <header>
        <?php require_once(__DIR__.'/footer.php') ?>
    </header>
</body>
</html>
<script>
    document.getElementById('import-file').addEventListener('click', function() {
        document.getElementById('fichier').click();
    });
</script>