

<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=plante', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}







$sth = $bdd->query('SELECT * FROM capteur');
$row = $sth->fetch(PDO::FETCH_ASSOC);
?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Plante connectée</title>

  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/one-page-wonder.css" rel="stylesheet">
</head>

<body>
 
<table class="table">
  <thead>
    <tr>
      <th scope="col">Plante</th>
      <th scope="col">Humidité</th>
      <th scope="col">Température</th>
      <th scope="col">Luminosité</th>
    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?= $row['humidite']; ?></td>
      <td><?= $row['temp']; ?></td>
      <td><?= $row['luminosite']; ?></td>
    </tr>
   
  </tbody>
</table>

<a  href="index.php"><button type="button" class="btn btn-primary btn-lg">Retour Accueil</button></a>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.bundle.js"></script>

</body>
</html>