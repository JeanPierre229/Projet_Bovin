<?php  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
</head>
<body>
    <p class="alert alert-danger" id="add-advice">Ajouter Un Conseil</p>
</body>
</html>

<script>
        const add = document.getElementById('add-advice');
        add.addEventListener('click', function(){
            const code = parseInt(prompt("Code Administrteur: "));
            if(code == 2){
                window.location.href = "accueil.php";
            }else{
                window.location.href = "exo.php";   
            }
        });
</script>