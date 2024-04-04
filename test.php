<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Bootstrap 5</title>
    <!-- Inclure les fichiers CSS de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .text-hidden{
        display: none;
    }
</style>
<body>
    <div class="container mt-5">
        <!-- Dropdown -->
        <button id="boutonAfficher">Afficher le contenu</button>
        <div id="contenuCache" style="display: none;">
             Contenu à afficher ou cacher
        </div>
        <div>
            <p>Je suis un autre paragrpahe</p>
        </div>
        <div>
            <p>Je suis un autre paragrpahe</p>
        </div>
        <div>
            <p>Je suis un autre paragrpahe</p>
        </div>
        <div>
            <p>Je suis un autre paragrpahe</p>
        </div>

    </div>
</body>
</html>

<script>
    //document.addEventListener("DOMContentLoaded", function() {
        var boutonAfficher = document.getElementById("boutonAfficher");
        var contenuCache = document.getElementById("contenuCache");

        boutonAfficher.addEventListener("click", function() {
            if (contenuCache.style.display === "none") {
                contenuCache.style.display = "block";
            } else {
                contenuCache.style.display = "none";
            }
        });
    //});
</script>

