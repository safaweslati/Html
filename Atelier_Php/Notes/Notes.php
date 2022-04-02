<?php
session_start();
if(isset($_SESSION['nbrNotes'])){
    $_SESSION['nbrNotes']++;
}
else $_SESSION['nbrNotes']=0;

$_SESSION['notes'][$_SESSION['nbrNotes']]=$_POST['note'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>
    <link rel="stylesheet" href="node_modules/bootswatch/dist/sketchy/bootstrap.css">
</head>
<body>
<div class="container">
<h2>Your Notes</h2>
<ol>
    <?php
    foreach ($_SESSION['notes'] as $nb=>$note) {
        ?>
        <li><?= "$note"?></li>
        <?php
    }
    ?>
</ol>
</div>
</body>
</html>
