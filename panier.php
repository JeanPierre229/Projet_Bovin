<?php 
    session_start();  

    if(!empty($_POST) && isset($_POST)){
        $montant_total = $_POST['quantite1']*10000;
        $montant_total += $_POST['quantite2']*7000;
        $montant_total += $_POST['quantite3']*4000;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier - WaxangariLabs</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&famil
    y=Reem+Kufi+Fun:wght@400..700&display=swap" 
    rel="stylesheet">
    <script src="https://cdn.kkiapay.me/k.js"></script>
</head>
<style>
    *{
    font-size: 15px;
    font-family: "Outfit", sans-serif;
    font-optical-sizing: auto;
    font-weight: 500;
    font-style: normal;
    }
    .form-toggle{
        border: 1px solid black;
    }
    .bd-input{
        border: 0;
        border-bottom: 2px solid #fff;
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
    .input-form{
        padding-right: 50px;
        padding-left: 50px;
    }
</style>
<body class="container">
    <header>
        <?php require "header.php"; ?>
    </header>
    <main>
        <form action="panier.php" method="post" class="formulaire">
            <div class="row my-3 p-2 justify-content-between">
                <div class="col-lg-8 col-md-12 col-12 row-form px-5 py-4">
                    <div>
                        <h2 class="text-success"><strong>Mon panier</strong></h2>
                    </div>
                    <div class="row justify-content-between p-2">
                        <div class="col">
                            <p>Détails du produits</p>
                        </div>
                        <div class="col text-end">
                            <p>Type</p>
                        </div>
                        <div class="col text-end">
                            <p>Quantity</p>
                        </div>
                        <div class="col text-center">
                            <p>Price Total</p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <hr width="100%" size="10px">
                        <div class="col">
                            <img src="images/panier-01.png" alt="Grazing Services Package" class="img">
                        </div>
                        <div class="col-2 my-3">
                            <h6><strong>Grazing Services Package</strong></h6>
                            <h6 class="">Beige</h6>
                        </div>
                        <div class="col-2 my-5">
                            <select name="#" id="#" class="px-3 rad">
                                <option value="#">M</option>
                                <option value="#">F</option>
                            </select>
                        </div>
                        <div class="col-3 my-5 text-center">
                            <input type="number" min="1" class="px-2 rad col-4 input-form" name="quantite1" id="quantite" placeholder="1" required>
                        </div>
                        <div class="col my-5">
                            <div class="row">
                                <div class="col-6">10.000</div>
                                <div class="col-6 text-end"><i class="fa fa-remove"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <hr width="100%" size="10px">
                        <div class="col">
                            <img src="images/panier-02.png" alt="Grazing Services Package" class="img">
                        </div>
                        <div class="col-2 my-3">
                            <h6><strong>Cattle Feed</strong></h6>
                            <h6 class="">Sliced</h6>
                        </div>
                        <div class="col-2 my-5">
                            <select name="#" id="#" class="px-3 rad">
                                <option value="#">1kg</option>
                                <option value="#">2kg</option>
                            </select>
                        </div>
                        <div class="col-3 my-5 text-center">
                            <input type="number" min="1" class="px-2 rad col-4 input-form" name="quantite2" id="quantite" placeholder="4" required>
                        </div>
                        <div class="col my-5">
                            <div class="row">
                                <div class="col-6">$12.39</div>
                                <div class="col-6 text-end"><i class="fa fa-remove"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <hr width="100%" size="10px">
                        <div class="col">
                            <img src="images/panier-03.png" alt="Grazing Services Package" class="img">
                        </div>
                        <div class="col-2 my-3">
                            <h6><strong>Cow Halter</strong></h6>
                            <h6 class="">Red</h6>
                        </div>
                        <div class="col-2 my-5">
                            <select name="#" id="#" class="px-3 rad">
                                <option value="#">3m</option>
                                <option value="#">4m</option>
                            </select>
                        </div>
                        <div class="col-3 my-5 text-center">
                            <input type="number" min="1" class="px-2 rad col-4 input-form" name="quantite3" id="quantite" placeholder="1" required>
                        </div>
                        <div class="col my-5">
                            <div class="row">
                                <div class="col-6">$7.29</div>
                                <div class="col-6 text-end"><i class="fa fa-remove"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    <hr width="100%" size="10px">
                        <div class="row">
                            <div class="col-10 text-end"><strong>Subtotal:</strong></div>
                            <div class="col-2 text-start">$35.17</div>
                        </div>
                        <div class="row">
                            <div class="col-10 text-end"><strong>Shipping:</strong></div>
                            <div class="col-2 text-start">$ 2.00</div>
                        </div>
                        <div class="row my-3">
                            <div class="col-10 text-end"><strong>Total:</strong></div>
                            <div class="col-2 text-start">$ 37.17</div>
                        </div>
                    <hr width="100%" size="10px">
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-12 bg-success my-5 rad text-light p-3">
                    <div>
                        <p>Checkout: </p>
                    </div>
                    <div class="my-5">
                        <legend>Shipping Details</legend>
                        <div class="row mt-2">
                            <div class="col text-light">
                                <label class="form-label" for="first_name">First Name</label>
                                <input class="form-control bd-input bg-success text-light" type="text" name="first_name" id="first_name" value="Jane" required>
                            </div>
                            <div class="col">
                                <label class="form-label" for="last_name">Last Name</label>
                                <input class="form-control bd-input bg-success text-light" type="text" name="last_name" id="last_name" value="Doe" required>
                            </div>
                        </div>
                        <div class="mt-2">
                            <label class="form-label" for="mail">Email</label>
                            <input class="form-control bd-input bg-success text-light" type="email" name="mail" id="mail" value="jane.doe@gmail.com" required>
                        </div>
                        <div class="mt-2">
                            <label class="form-label" for="phone">Phone</label>
                            <input class="form-control bd-input bg-success text-light" type="text" name="phone" id="phone" value="+1 317 404 5562" required>
                        </div>
                        <div class="mt-2">
                            <label class="form-label" for="addresse">Addresse</label>
                            <input class="form-control bd-input bg-success text-light" type="text" name="addresse" id="address" value="123 Grazing Street" required>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label class="form-label" for="code_post">Postal Code</label>
                                <input class="form-control bd-input bg-success text-light" type="text" name="code_post" id="code_post" value="12345" required>
                            </div>
                            <div class="col">
                                <label class="form-label" for="country">Country/Région</label>
                                <select name="country" id="country" class="form-control bd-input bg-success text-light">
                                    <option value="#">Nigéria</option>
                                    <option value="#">Bénin</option>
                                    <option value="#">Pays-Bas</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-2">
                            <p>
                                <span><i class="fa fa-check"></i></span>
                                <span>Use for Billing</span>
                            </p>
                        </div>
                        <div>
                            <!-- <button class="btn btn-light form-control rad">Proceed to Payment ></button> -->
                            <input value="Proceed to Payment >" type="submit" class="btn btn-light form-control rad">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
    <footer>
        <?php require "footer.php" ?>
    </footer>
</body>
</html>
<script>
    var formulaire = document.querySelector(".formulaire");

    formulaire.onsubmit=(e)=>{
        e.preventDefault();
        openKkiapayWidget({amount:<?=$montant_total ?>, position: "right", callback: "/success", 
        data: "Test de paiement",
        theme: "#092374",
        sandbox: "true",
        key: "ea194080f5a011ee9f805f907fefa779"
        })
    }
</script>