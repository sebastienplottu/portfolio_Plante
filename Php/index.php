
<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=plante', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}






if(isset($_POST['mail'])) {

        // ajout d'entrée dans la table plante de la base de données plante.
    $req = $bdd->prepare('INSERT INTO user(mail) VALUES(:mail)');

    $req->execute(array(
        'mail' => $_POST['mail']
    ));

}

$sth = $bdd->query('SELECT * FROM user ORDER BY id DESC');
$row = $sth->fetch(PDO::FETCH_ASSOC);
?>



?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Plante connectée</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/one-page-wonder.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Connected Flowers</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="signup.html">Inscription</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Connexion</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <a href="plante.php" class="btn btn-primary btn-xl rounded-pill mt-5">Consulter</a>
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Conditions des plantes</h2>
            <p>Controlez l'état de vos plantes ! Ici vous pouvez consulter la température, l'humidité et la luminosité. Vous pouvez également comparer ces paramètres aux conditions optimales pour vos bébés végétaux.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="p-5">
            <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Consulter</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4">Alertes</h2>
            <p>Consultez ici l'historique des alertes. Vous êtes alerté par courriel dès que les conditions deviennent critiques pour vos plantes.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5">
            <a href="user.php" class="btn btn-primary btn-xl rounded-pill mt-5">Consulter</a>
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4">Nouvelle plante</h2>
            <p>Nous vous assistons en vous indiquant quand et comment planter votre nouveau bébé végétale !</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="py-5 bg-black">
    <div class="container">
      <p class="m-0 mb-3 text-center text-white small">Rejoignez la communauté</p>
      <p class="m-0 text-center text-white small">
        <a href="" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
        <a href="" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
        <a href="" target="_blank"><i class="fa fa-github fa-2x"></i></a>
        <a href="" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
      </p>
    </div>
  </footer>

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.bundle.js"></script>

</body>
</html>