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
    .b-s{
        border: 0;
        box-shadow: none;
    }
    .padding-filter{
        margin-bottom: 100px;
    }
    .padding-filter-new{
        margin-bottom: 150px;
    }
</style>
<body class="container">
    <header>            
        <?php require "header.php"; ?>
    </header>
    <main class="">
        <div class="mx-auto">
        <div class="row my-3 mx-5">
            <div>
                <i class="fa fa-arrow-left" style="font-size: 35px;"></i>
            </div>
            <div class="mx-auto">
                <p class="h4">Search results for "Grazing Services"</p>
            </div>
        </div>
        <div class="row">
            <div class="col-5">
                <?php require "aside1.php"; ?>
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
    </div> 
    </main>
    <footer>
        <?php require "footer.php" ?>
    </footer>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>