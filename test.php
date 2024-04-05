<?php
    if($image){
        $upload = true;
        $extension = array('jpg', 'png', 'jpeg', 'gif');
        $image_ext = strtolower(pathinfo($image_path, PATHINFO_EXTENSION));

        if(!in_array($image_ext, $extension)){
            $imageErreur = "Le fichier doit être sous l'un de ces formats: .jpg, .png, .jpeg, et .gif";
            $upload = false;
        }

        if(file_exists($image_path)){
            $imageErreur = "Cette image existe déjà !";
            $upload = false;
        }

        if($_FILES["fichier"]["size"] > 500000){
            $imageErreur = "Le fichier ne doit pas dépasser 500kb";
            $upload = false;
        }

        $special_char = array("'", "/", "\\", ":", "<", ">");
        if(preg_match('/[\'\/\\\\:<>\"]/', $image)){
            $imageErreur = "Le nom du fichier ne doit pas contenir ces caractères: /, \\, :, < et >";
            $upload = false;
        }

        if($upload){
            if(!move_uploaded_file($_FILES["fichier"]["tmp_name"], $image_path)){
                $imageErreur = "Erreur lors du chargement du fichier";
                $upload = false;
            }
        }

        if($upload){
            // Insertion dans la base de données seulement si l'upload est réussi
            $connect = new PDO("mysql:host=localhost; dbname=bovin_solution", "root", "");
            $requete = $connect->prepare("
                INSERT INTO publication_$userId(titre, nom_prenoms, description, image)
                VALUES('$titre','$nom_prenoms','$description','$image')
            ");
            $requete->execute();
            header("Location: accueil.php");
        }
    }
?>