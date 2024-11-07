<?php 
    //Notre base de données statique
    $users = [
        [
            'email' => 'omarseck@gmail.com',
            'password' => 'Passer123',
            'prenom' => 'Omar Seck'
        ],
        [
            'email' => 'test@gmail.com',
            'password' => '12345678',
            'prenom' => 'Testeur'
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulaire de Connexion</title>
    <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header>
       <?php include('header.php'); ?>
    </header>
    <div class="container">
      <?php include('login.php'); ?>
    </div>
    <script src="lib/jquery/dist/jquery.min.js"></script>
    <script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
