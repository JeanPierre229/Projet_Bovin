<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grazing Services - WaxangariLabs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<style>
    .form-toggle{
        border: 1px solid black;
    }
    .row-form{
        background-color: rgb(238, 238, 238);
        border-radius: 20px;
    }
    .img-service{
        width: 100%;
    }
    a{
        text-decoration: none;
        color: black;
    }
    a:hover{
        color: black;
        text-decoration: none;
    }
    .rad{
        border-radius: 40px;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <?php require "header.php"; ?>
        </div>
        <div class="row my-3">
            <div>
                <i class="fa fa-arrow-left" style="font-size: 35px;"></i>
            </div>
            <div class="mx-auto">
                <p class="h4">Search results for "Grazing Services"</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <aside>
                    <div class="col-8">
                        <ul class="list-unstyled form-toggle p-2 rad">
                            <li class="">
                                <a href="#" class="px-4">Filter by location</a>
                                <a href="#" class="dropdown-toggle"></a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p>
                            <a href="#" class="px-4"><strong>Delivery status</strong></a>
                            <a href="#" class="dropdown-toggle px-4" data-toggle="dropdown"></a>
                        </p>
                        <p class="col-8 px-4">
                            <a href="#">Ships in 24h</a>
                            <span class="text-right container">
                                <input type="checkbox" class="text-right" checked>
                            </span>
                        </p>
                        <p class="col-8 px-4">
                            <a href="#">Ending soon</a>
                            <span class="text-right container">
                                <input type="checkbox" class="text-right" checked>
                            </span>
                        </p>
                        <p class="col-8 px-4">
                            <a href="#" class="pr-4">Nouveau</a>
                            <span class="text-right container">
                                <input type="checkbox" checked>
                            </span>
                        </p>
                    </div>
                    <div>
                        <p>
                            <a href="#" class="px-4"><strong>Catégorie de produits</strong></a>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"></a>
                        </p>
                        <p class="col-8 px-4">
                            <a href="#">Produit Bios</a>
                            <span class="text-right container">
                                <input type="checkbox" class="text-right" checked>
                            </span>
                        </p>
                        <p class="col-8 px-4">
                            <a href="#" class="px-4">Lait</a>
                            <span class="text-right container">
                                <input type="checkbox" checked>
                            </span>
                        </p>
                    </div>
                    <div>
                        <p class="col-8 px-4">
                            <a href="#"><strong>Product details</strong></a>
                            <span class="text-right container">
                                <i class="fa fa-angle-up" style="font-weight: bold;"></i>
                            </span>
                        </p>
                        <p class="col-8 px-4">
                            <a href="#" class="px-4 text-start"><strong>Valeurs</strong></a>
                            <span class="text-right container">
                                <i class="fa fa-angle-up" style="font-weight: bold;"></i>
                            </span>
                        </p>
                    </div>
                </aside>
            </div>
            <div class="col-7">
                <div class="row">
                    <div class="col-5 row-form mr-4">
                        <p class="container">
                            <img src="images/boeuf.png" alt="" class="img img-service">
                            <h6 class="text-success px-3">Service rating</h6>
                        </p>
                        <p class="px-3">
                            <span>4.5 stars</span>
                            <span class="container text-right text-success">Available now</span>
                        </p>
                    </div>
                    <div class="col-5 row-form">
                        <p class="container-fluid">
                            <img src="images/ferme.png" alt="" class="img img-service">
                            <h6 class="text-success px-3">Service rating</h6>
                        </p>
                        <p>
                            <span class="px-3">4.5 stars</span>
                            <span class="container text-right text-success">20.000 F</span>
                        </p>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-5 row-form mr-4">
                        <p class="container">
                            <img src="images/cheval.png" alt="" class="img img-service">
                            <h6 class="text-success px-3">Service rating</h6>
                        </p>
                        <p>
                            <span class="px-3">4.5 stars</span>
                            <span class="container text-right text-success">Available now</span>
                        </p>
                    </div>
                    <div class="col-5 row-form">
                        <p class="container-fluid">
                            <img src="images/ferme.png" alt="" class="img img-service">
                            <h6 class="text-success px-3">Service rating</h6>
                        </p>
                        <p>
                            <span class="px-3">4.5 stars</span>
                            <span class="container text-right text-success">20.000 F</span>
                        </p>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-5 row-form mr-4">
                        <p class="container">
                            <img src="images/plantes.png" alt="" class="img img-service">
                            <h6 class="text-success px-3">Service rating</h6>
                        </p>
                        <p>
                            <span class="px-3">4.5 stars</span>
                            <span class="container text-right text-success">Available now</span>
                        </p>
                    </div>
                    <div class="col-5 row-form">
                        <p class="container-fluid">
                            <img src="images/accessoire.png" alt="" class="img img-service">
                            <h6 class="text-success px-3">Service rating</h6>
                        </p>
                        <p>
                            <span class="px-3">4.5 stars</span>
                            <span class="container text-right text-success">Available now</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php require "footer.php" ?> 
    </div>
</body>
</html>