<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page avec hauteur de 100vh</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body, html {
    margin: 0;
    padding: 0;
    height: 100%;
}

.section {
    height: 100vh;
    background-color: #3498db; /* Couleur de fond de la section */
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.autre-section {
    height: 200px; /* Exemple de hauteur fixe pour une autre section */
    background-color: #2ecc71; /* Couleur de fond de l'autre section */
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

</style>
<body>
    <div class="section">
        <h1>Ceci est une section avec hauteur de 100vh</h1>
    </div>
    <div class="autre-section">
        <h2>Ceci est une autre section</h2>
    </div>
</body>
</html>
