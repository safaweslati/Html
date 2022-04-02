<?php
session_start();
$_SESSION['user']=$_POST['name'];

$prix=4;
if($_POST['nbreSan']<10){
    $prix*=$_POST['nbreSan'];
}
else $prix*=$_POST['nbreSan']*0.9;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recap</title>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/cyborg/bootstrap.css">
</head>
<body>
<ul style="list-style-type: none">
    <li><?= " Votre Commande est enregistrée avec succés" ?></li>
   <li><?= "${_POST['firstname']} ${_POST['name']} : vous avez commandé ${_POST['nbreSan']} Sandwitchs delivré(s) à l'adresse ${_POST['adr']}<br>"?></li>
    <li><?="le prix est $prix dinars"?></li>
</ul>
<?php
$cin = $_FILES["CIN"];
if($cin["error"]==0) {
    move_uploaded_file($cin["tmp_name"],"src/".uniqid().basename($cin["name"]));
    echo ("Your file is uploaded successfully");
}
else{ echo ("There was a problem in your file") ;} ?>
</body>
</html>
