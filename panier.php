<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Panier - WaxangariLabs</title>
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
        <div class="row my-3 p-2 justify-content-between">
            <div class="col-7 row-form">
                <div>
                    <h4 class="text-success">Mon panier</h4>
                </div>
                <div class="row justify-content-between p-2">
                    <div class="">
                        <p>Détails du produits</p>
                    </div>
                    <div class="">
                        <p>Type</p>
                    </div>
                    <div class="">
                        <p>Quantity</p>
                    </div>
                    <div class="">
                        <p>Price Total</p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <hr width="100%" size="10px">
                    <div class="">
                        <img src="images/panier-01.png" alt="Grazing Services Package" class="img w-100">
                    </div>
                    <div class="col-2 my-3">
                        <h6><strong>Grazing Services Package</strong></h6>
                        <h6 class="">Beige</h6>
                    </div>
                    <div class="col-3 my-5">
                        <p class="form-toggle col-6 rad bg-light">
                            <a href="#" class="">M</a>
                            <a href="#" class="dropdown-toggle"></a>
                        </p>
                    </div>
                    <div class="col-3 my-5">
                        <p class="form-toggle col-3 rad bg-light">1</p>
                    </div>
                    <div class="col my-5">
                        <div class="row">
                            <div class="mx-2">10.000</div>
                            <div><i class="fa fa-remove"></i></div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <hr width="100%" size="10px">
                    <div class="">
                        <img src="images/panier-02.png" alt="Grazing Services Package" class="img w-100">
                    </div>
                    <div class="col-2 my-3">
                        <h6><strong>Cattle Feed</strong></h6>
                        <h6 class="">Sliced</h6>
                    </div>
                    <div class="col-3 my-5">
                        <p class="form-toggle col-7 rad bg-light">
                            <a href="#" class="">1kg</a>
                            <a href="#" class="dropdown-toggle"></a>
                        </p>
                    </div>
                    <div class="col-3 my-5">
                        <p class="form-toggle col-3 rad bg-light">4</p>
                    </div>
                    <div class="col my-5">
                        <div class="row">
                            <div class="mx-2">$12.39</div>
                            <div><i class="fa fa-remove"></i></div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <hr width="100%" size="10px">
                    <div class="">
                        <img src="images/panier-03.png" alt="Grazing Services Package" class="img w-100">
                    </div>
                    <div class="col-2 my-3">
                        <h6><strong>Cow Halter</strong></h6>
                        <h6 class="">Red</h6>
                    </div>
                    <div class="col-3 my-5">
                        <p class="form-toggle col-6 rad bg-light">
                            <a href="#" class="">3m</a>
                            <a href="#" class="dropdown-toggle"></a>
                        </p>
                    </div>
                    <div class="col-3 my-5">
                        <p class="form-toggle col-3 rad bg-light">1</p>
                    </div>
                    <div class="col my-5">
                        <div class="row">
                            <div class="mx-2">$7.29</div>
                            <div><i class="fa fa-remove"></i></div>
                        </div>
                    </div>
                    <hr width="100%" size="10px">
                </div>
                <div class="col">
                    <p class="text-right"><strong>Subtotal: </strong> $35.17</p>
                    <p class="text-right"><strong>Shipping: </strong> $2.00</p>
                    <p class="text-right"><strong>Total: </strong> $37.17</p>
                </div>
            </div>
            <div class="col-4 bg-success my-5 rad text-light p-3">
                <div>
                    <p>Checkout: </p>
                </div>
                <div class="my-5">
                    <form action="#" method="post">
                        <legend>Shipping Details</legend>
                        <div class="row mt-2">
                            <div class="col">
                                <label class="form-label" for="first_name">First Name</label>
                                <input class="form-control" type="text" name="first_name" id="first_name" placeholder="Jane" required>
                            </div>
                            <div class="col">
                                <label class="form-label" for="last_name">Last Name</label>
                                <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Doe" required>
                            </div>
                        </div>
                        <div class="mt-2">
                            <label class="form-label" for="mail">Email</label>
                            <input class="form-control" type="text" name="mail" id="mail" placeholder="jane.doe@gmail.com" required>
                        </div>
                        <div class="mt-2">
                            <label class="form-label" for="phone">Phone</label>
                            <input class="form-control" type="text" name="phone" id="phone" placeholder="+1 317 404 5562" required>
                        </div>
                        <div class="mt-2">
                            <label class="form-label" for="addresse">Addresse</label>
                            <input class="form-control" type="text" name="addresse" id="address" placeholder="123 Grazing Street" required>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <label class="form-label" for="code_post">Postal Code</label>
                                <input class="form-control" type="text" name="code_post" id="code_post" placeholder="12345" required>
                            </div>
                            <div class="col">
                                <label class="form-label" for="country">Country/Région</label>
                                <select name="country" id="country" class="form-control">
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
                            <input value="Proceed to Payment >" type="submit" class="btn btn-light form-control rad">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>