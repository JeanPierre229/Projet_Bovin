<style>
    #ac{
        text-decoration: none;
        color: black;
        padding: 10px;
    }
    .bd{
        border-radius: 10px;
    }
    #profil{
        width: 30px;
        height: 30px;
        border-radius: 50%;
        border: 2px solid #fff;
    }
    #bell{
        text-decoration: none;
        color: black;
    }
</style>
<header class="mt-5 mx-auto">
    <div class="row justify-content-between">
        <div class="row-1 mx-5 my-2 text-center">
            <a href="accueil.php" id="ac">
                <img src="images/logo.png" alt="Logo de BovinSolution" class="img w-50">
            </a>
        </div>
        <div class="mx-3 my-3">
            <span class="mx-2">
                <a href="accueil.php" id="ac">Accueil</a>
            </span>
            <span class="mx-2">
                <a href="panier.php" id="ac">Achat et livraison</a>
            </span>
            <span class="mx-2">
                <a href="gamme.php" id="ac">Notre annuaire</a>
            </span>
        </div>
        <div class="my-3">
            <span class="mx-2">
                <a href="accueil.php#location" id="ac">
                    <i class="fa fa-map-marker bg-success p-2 bd"><span class="px-2">Géolocation</span></i>
                </a>
            </span>
            <span class="mx-2">
                <a href="publier_annonce.php" id="ac">
                    <i class="fa fa-bullhorn bg-success p-2 bd"><span class="px-2">Plublier une annonce</span></i>
                </a>
            </span>
            <span class="mx-2">
                <a href="statistique.php" id="bell"><i class="fa fa-bell"></i></a>
            </span>
            <?php if(!empty($_SESSION['profil']) && isset($_SESSION['profil'])){ ?>
                <span class="mx-2">
                    <a href="completer_profil.php" id="bell">
                        <img src="images/img-profil/<?= $_SESSION['profil'] ?>" alt="" class="img" id="profil">
                    </a>
                </span>
            <?php }else{ ?>
                <span class="mx-2">
                    <a href="completer_profil.php" id="bell"><i class="fa fa-user" style="font-size: 20px;"></i></a>
                </span>
            <?php } ?>
            <span class="mx-2">
                <a href="deconnexion.php" id="bell"><i class="fa fa-sign-out" style="font-size: 20px;" title="Deconnecter"></i></a>
            </span>
        </div>
    </div>
</header>