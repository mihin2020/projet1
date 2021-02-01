<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
           <link rel="stylesheet" href="style/inscription.css">
           <link rel="stylesheet" href="style/inscri.css">
            <title>Connexion</title>
        </head>
        <body>
        <div class="login-form">
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                         <div class="alert alert-success" role="alert">
                     <h4 class="alert-heading text-center">FELICITATION</h4>
                  <p class="text-center">Votre inscription a été effectuée avec succès.</p>
                              <hr>
                     <p class="text-center"><a href="index.php">Acceder à votre compte</a></p>
                        </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <h4  class="text-center">Erreur !!! mot de passe incorrect</h4>
                                <p  class="text-center">Merci de réessayer</p>
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur !!! Email non valide</Em></h4>
                                <p class="text-center">Merci de réessayer</p>
                            </div>
                        <?php
                        break;

                        case 'email_length':
                        ?>
                             <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur !!! Email trop long</h4>
                                <p class="text-center">Merci de réessayer</p>
                            </div>
                        <?php 
                        break;

                        case 'pseudo_length':
                        ?>
                             <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur !!! Nom d'utlisateur trop long</h4>
                                <p>Merci de réessayer</p>
                            </div>
                        <?php 
                        case 'already':
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <h4 class="text-center">Erreur Compte déjà existant</h4>
                              
                            </div>
                        <?php 

                    }
                }
                ?>
            
            <form action="inscription_traitement.php" method="post">
            <div><img src="img/images4.png" alt=""></div>
                <h2 class="text-center font-weight-bold text-uppercase">veuillez vous inscrire</h2>       
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Utilisateur" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Confirmer le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-danger btn-block text-uppercase font-weight-bold">s'inscrire</button>
                 <div class="text-center font-weight-bold text-uppercase mt-3"><a href="index.php">Avez-vous deja un compte?</a></div>   
                </div>   
            </form>
        </div>
        <style>
            .login-form {
                width: 340px;
                margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>
        </body>
</html>