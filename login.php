
<?php 
    //Validation du formulaire
    if (isset($_POST['email']) && isset($_POST['password'])) {

        foreach($users as $user){
            if($user['email'] == $_POST['email'] &&
                $user['password'] == $_POST['password']){
                    $userLogger = [
                        'email' => $user['email'],
                        'prenom' => $user['prenom']
                    ];
                }else{
                    $errorMessage = sprintf('Les informations
                    envoyées ne vous permettent pas de vous 
                    connecter (%s %s)', $_POST['email'],
                $_POST['password']);
                }
        }
    }
?>
   
   
<?php if(!isset($userLogger)) : ?>
   <main class="main" class="pb-3">
        <div class="card shadow border-0 mt-4">
          <div class="card-header bg-secondary bg-gradient ml-0 py-3">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="text-white py-2">Connexion</h2>
              </div>
            </div>
          </div>
          <div class="card-body p-4">
            <?php if(isset($errorMessage)) :?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $errorMessage;?>
                </div>
            <?php endif;?>
            <form action="index.php" method="post" class="row">
              <div class="border p-3">
                <div class="form-floating py-2 col-12">
                  <input
                    type="text"
                    name="email"
                    class="form-control border-0 shadow"
                  />
                  <label for="email" class="ms-2">Email</label>
                </div>
                <div class="form-floating py-2 col-12">
                  <input
                    type="password"
                    name="password"
                    class="form-control border-0 shadow"
                  />
                  <label for="email" class="ms-2">Mot de Passe</label>
                </div>
                <div class="row pt-2">
                  <div class="col-6 col-md-3">
                    <button type="submit" class="btn btn-primary form-control">
                      Se Connecter
                    </button>
                  </div>
                  <div class="col-6 col-md-3">
                    <span>Pas encore de compte? </span>
                    <a
                      href="#"
                      class="nav-link"
                    >
                      S'inscrire
                    </a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </main>
<?php else: ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo $userLogger['prenom'] ?> et 
        bienvenue sur notre plateforme de  cours en ligne.
    </div>
<?php endif; ?>