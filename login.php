<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Login - PHP</title>
    </head>

    <body>

        <?php
            define('useradmin', 'Rayanne');
            define('passwordadmin', 'mdp123');
            $name = useradmin;

            $error_message = '';

            if(!empty($_POST))
            {
                if(empty($_POST['user'])) // User
                {
                    $error_message = 'Veuillez saisir votre identifiant.';
                }

                elseif(empty($_POST['password'])) // Password
                {
                    $error_message = 'Veuillez saisir votre mot de passe.';
                }

                elseif($_POST['user'] !== useradmin) // Si user n'est pas égal à useradmin
                {
                    $error_message = 'Votre identifiant est incorrect.';
                }

                elseif($_POST['password'] !== passwordadmin) // Si
                {
                    $error_message = 'Votre mot de passe est incorrect.';
                }

                else
                {
                    $error_message = 'Bonjour, '. useradmin .' !';
                }
            }
        ?>

        <h3><?php echo $error_message; ?></h3>

        <button type="submit" name="logout">Se déconnecter</button>

    </body>
</html>