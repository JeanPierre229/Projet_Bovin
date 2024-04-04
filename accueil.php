<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - WaxangariLabs</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<style>
    body{
        font-size: 18px;
    }
    .bg{
        background-image: url("images/after-header.png");
        background-size: 100%;
    }
    .sh{
        background-color: rgb(238, 238, 238);
        border-radius: 50px;
        padding: 15px;
    }
    #search1{
        border: 0;
        margin-top: -20px;
        padding: 20px;
        background-color: rgb(238, 238, 238);
    }
    #search{
        border: 0;
        background-color: rgb(238, 238, 238);
    }
    #img-ac{
        width: 180px;
        height: 120px;
    }
    #img-footer{
        border-radius: 10px;
    }
</style>
<body class="container">
    <header>
        <?php require_once(__DIR__.'/header.php') ?>
    </header>
    <main>
        <div class="row bg mt-3">
            <div class="p-5 m-5 col-4">
                <h3 class="text-success"><strong>BovinSolution</strong></h3>
                <p class="text-light mb-5">
                    Nous vous facilitons l'accès aux ressources et
                    informations concernant l'élevage au Bénin
                </p>
            </div>
        </div>
        <div class="col">
            <div class="row justify-content-center">
                <form action="#">
                    <p class="sh px-5" id="search1">
                        <input size="100%" type="text" name="search" id="search" placeholder="Rechercher Des Animaliers Peulhs Disponibles">
                        <i class="fa fa-search text-success" style="font-size: 30px;"></i>
                    </p>
                </form>
            </div>
        </div>
        <div class="row justify-content-between text-success">
            <h6>Catégories-Achat</h6>
            <h6>Voir tout</h6>
        </div>
        <div class="row">
            <div class="mx-5 p-0" style="border: 1px solid gray; border-radius: 15px;">
                <p class='text-center'>
                    <img src="images/lait-vache.png" alt="Une image de lait de vache" id="img-ac" class="img">
                </p>
                <h4 class="text-center">Lait de vache</h4>
                <p class="text-center">
                    <button class="btn btn-success px-3 py-0">Ajouter au panier</button>
                </p>
            </div>
            <div class="mx-5 p-0" style="border: 1px solid gray; border-radius: 15px;">
                <p class='text-center'>
                    <img src="images/fromage.png" alt="Une image de fromage" id="img-ac" class="img">
                </p>
                <h4 class="text-center">Fromage</h4>
                <p class="text-center">
                    <button class="btn btn-success px-3 py-0">Ajouter au panier</button>
                </p>
            </div>
            <div class="mx-5 p-2" style="border: 1px solid gray; border-radius: 15px;">
                <p class='text-center'>
                    <img src="images/oeuf.png" alt="Une image d'oeuf" id="img-ac" class="img">
                </p>
                <h4 class="text-center">Oeuf</h4>
                <p class="text-center">
                    <button class="btn btn-success px-3 py-0">Ajouter au panier</button>
                </p>
            </div>
            <div class="mx-5 p-2" style="border: 1px solid gray; border-radius: 15px;">
                <p class='text-center'>
                    <img src="images/poisson.png" alt="Une image d'oeuf" id="img-ac" class="img">
                </p>
                <h4 class="text-center">Poisson</h4>
                <p class="text-center">
                    <button class="btn btn-success px-3 py-0">Ajouter au panier</button>
                </p>
            </div>
        </div>
        <div class="row bg-secondary m-2 justify-content-center">
            <h4 class="text-light p-2">Annuaire géolocalisé des marchés du bétails</h4>
        </div>
        <div class="row mx-auto">
            <div class="col-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125977.52701863702!2d2.527193495
                    4203368!3d9.351160549754804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10320550a556d695
                    %3A0x706d4b90bc86232d!2sParakou!5e0!3m2!1sfr!2sbj!4v1708417046394!5m2!1sfr!2sbj" width="80%" 
                    height="250px" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="col-6 my-3">
                <div class="mx-5 my-2">
                    <h4><strong>Annotation</strong></h4>
                </div>
                <div class="mx-2 my-3">
                    <span>
                        <i class="fa fa-map-marker text-warning" style="font-size: 20px;">:<span class="px-2 text-dark">Points de Ventes de boeufs</span></i>
                    </span>
                </div>
                <div class="mx-2 my-3">
                    <span>
                        <i class="fa fa-map-marker text-primary" style="font-size: 20px;">:<span class="px-2 text-dark">Points de Ventes d'oeufs</span></i>
                    </span>
                </div>
                <div class="mx-2 my-3">
                    <span>
                        <i class="fa fa-map-marker text-danger" style="font-size: 20px;">:<span class="px-2 text-dark">Points de Ventes de poisson</span></i>
                    </span>
                </div>
                <div class="mx-2">
                    <button class="btn btn-secondary py-0 px-3">En savoir plus sur le marché du bétail</button>
                </div>
            </div>
        </div>
        <div class="row bg-success px-2">
            <div class="mx-auto my-3">
                <h2><strong class="text-light">Annonce</strong></h2>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="container bg-light" id="img-footer">
                        <p>
                            <img src="images/vache.png" alt="L'élevage de boeufs" class="img container">
                        </p>
                        <h5>Formation en élevage de boeufs</h5>
                        <p>
                            In this article we will provide advice on cattle
                            grazing for healthy cattle 
                        </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container bg-light" id="img-footer">
                        <p>
                            <img src="images/p_poisson.png" alt="L'élevage de poisson" class="img container">
                        </p>
                        <h5>Formation en élevage de poisson</h5>
                        <p>
                            In this article we will provide advice on cattle
                            grazing for healthy cattle 
                        </p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="container bg-light" id="img-footer">
                        <p>
                            <img src="images/poules.png" alt="L'élevage de poules" class="img container">
                        </p>
                        <h5>Formation en élevage de poules</h5>
                        <p>
                            In this article we will provide advice on cattle
                            grazing for healthy cattle 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <?php require "footer.php"; ?>
    </footer>
</body>
</html>