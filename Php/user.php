
<?php



try
{
    $bdd = new PDO('mysql:host=localhost;dbname=plante', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}







if(isset($_POST['nom']) && isset($_POST['categorie']) && isset($_POST['description']) && isset($_POST['humidite']) && isset($_POST['temperature']) && isset($_POST['luminosite']) && isset($_POST['floraison'])) {

        // ajout d'entrée dans la table plante de la base de données plante.
    $req = $bdd->prepare('INSERT INTO plante(name, categorie, description, humidite, temp, luminosite, floraison) VALUES(:nom, :categorie, :description, :humidite, :temperature, :luminosite, :floraison)');

    $req->execute(array(
        'nom' => $_POST['nom'],
        'categorie' => $_POST['categorie'],
        'description' => $_POST['description'],
        'humidite' => $_POST['humidite'],
        'temperature' => $_POST['temperature'],
        'luminosite' => $_POST['luminosite'],
        'floraison' => $_POST['floraison']
    ));

}





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
         <th scope="col">Id</th>
      <th scope="col">Nom</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Description</th>
      <th scope="col">Humidité</th>
        <th scope="col">Température</th>
        <th scope="col">Luminosité</th>
        <th scope="col">Floraison</th>
        
    </tr>
  </thead>
  <tbody>
      <form methode="post" action="user.php">
    <tr>
      <th scope="row">1</th>
      <td> <input type="text" class="form-control" placeholder="Nom de la plante"  name="nom">
           </td>
      <td><input type="text" class="form-control" placeholder="Catégorie de la plante"  name="categorie">
        </td>
      <td><input type="text" class="form-control" placeholder="Description de la plante"  name="description">
        </td>
        <td><input type="text" class="form-control" placeholder="Humidité optimale" name="humidite">
        </td>
        <td><input type="text" class="form-control" placeholder="Température optimale" name="temperature">
        </td>
        <td><input type="text" class="form-control" placeholder="Lumnosité Nécessaire" name="luminosite">
        </td>
        <td><input type="text" class="form-control" placeholder="Période de Floraison " name="floraison">
        </td>
    </tr>
   <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
  </form>
      
  </tbody>
</table>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.bundle.js"></script>

</body>
</html>