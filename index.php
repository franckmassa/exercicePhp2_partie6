<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice2</title>
  </head>
  <body>
<p>
<?php
//Test pour verifier que l'age existe dans l'url
if(isset($_GET['lastname']) && isset($_GET['firstname']) && isset($_GET['age'])){
  echo $_GET['lastname'] . ' ' . $_GET['firstname'] . ' ' . $_GET['age'];
} else {
  echo 'il manque l\'age !';
}
 ?>
</p>
  </body>
</html>
