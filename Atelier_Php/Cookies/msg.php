<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/darkly/bootstrap.min.css">
</head>
<body>
<?php
session_start();
if(!isset($_COOKIE["form"])){
    $reponse = $_POST["reponse"];
    setcookie($name="form",$value = $reponse,$expire = time()+120);
    ?><p>Vote enregistrée</p>
    <?php
}
else{
    ?>
    <p>Vous avez deja voté</p>
    <p>Votre reponse  est : <?php
        echo($_COOKIE["form"])
        ?> </p>
    <?php
}
?>
</body>
</html>

