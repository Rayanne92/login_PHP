<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Login - PHP</title>
    </head>

    <body>

        <?php
            define('useradmin', 'Admin');
            define('passwordadmin', 'mdp123');

            $error_message = '';

            if(!empty($_POST))
            {
                if(empty($_POST['user'])) // User
                {
                    $error_message = 'Veuillez saisir votre identifiant.';
                    echo $error_message;
                }

                elseif(empty($_POST['password'])) // Password
                {
                    $error_message = 'Veuillez saisir votre mot de passe.';
                    echo $error_message;
                }

                elseif($_POST['user'] !== useradmin) // Si user n'est pas égal à useradmin
                {
                    $error_message = 'Votre identifiant est incorrect.';
                    echo $error_message;
                }

                elseif($_POST['password'] !== passwordadmin) // Si
                {
                    $error_message = 'Votre mot de passe est incorrect.';
                    echo $error_message;
                }

                else
                {
                    $successfully_message = 'Bienvenue'. useradmin .' !';
                    echo $successfully_message;
                }
            }
        ?>

    </body>
</html>