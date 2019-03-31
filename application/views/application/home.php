<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Pricing example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>

  <body>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4"> Application d'inscription Masteres</h1>
      <p class="lead">Mise en place d'une application web de gestion de concoures d'entrer au cycle de formation mastère </p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Etudiant</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li>Creez votre comptre </li>
              <li>Saisissez vos notes et parcours universitaire</li>
              <li>Calculez votre score</li>
            </ul>
            <a class="btn btn-lg btn-block btn-primary" href="<?= base_url('users/login'); ?>" style="color: white"> Espace Etudiants</a>
          </div>
        </div>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Admin</h4>
          </div>
          <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <li>Gerez les masteres</li>
              <li>Parcourez la liste des eutdiant</li>
              <li>Gerez les demandes mastere</li>
            </ul>
            <a class="btn btn-lg btn-block btn-info" href="<?= base_url('admin/login'); ?>" style="color: white"> Espace Admin</a>
          </div>
        </div>
      </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>

