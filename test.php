<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="test.php" method="post" enctype="multipart/form-data">
    <input type="file" name="video" accept="video/*">
    <input type="submit" value="Envoyer">
  </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $video = $_FILES["video"];
    $uploadDir = "images/";

    if ($video["error"] == UPLOAD_ERR_OK && $video["type"] == "video/mp4") {
        $uploadPath = $uploadDir . basename($video["name"]);
        move_uploaded_file($video["tmp_name"], $uploadPath);
        echo "La vidéo a été téléchargée avec succès !";
    } else {
        echo "Erreur lors du téléchargement de la vidéo.";
    }
}
?>
