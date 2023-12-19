<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icons/password_90px.png">
    <title>Connexion</title>
</head>
<body>
    <section class="connexion">
        <div class="connexion-form">
            <form action="" method="post">
                <div class="image-user">
                    <img src="icons/icons8_user_64.png" alt="">
                </div>
                <div class="Inputs">
                    <input type="text" name="pseudo-user-or-admin" required="required" placeholder="Pseudo">
                    <input type="text" name="pwd-user-or-admin" required="required" placeholder="Mot de passe">
                </div>
                <div class="buttons">
                    <button type="submit">Connexion</button>
                </div>
                <div class="class-Icons" style="margin-top:50px">
                    <a href="#"><img src="icons/icons8_facebook.ico" alt=""></a>
                    <a href="#"><img src="icons/icons8_github.ico" alt=""></a>
                    <a href="#"><img src="icons/icons8_LinkedIn_Circled.ico" alt=""></a>
                    <a href="#"><img src="icons/icons8_instagram.ico" alt=""></a>
                </div>
                <div class="indications">
                    <span>Vous avez oublier <a href="#">votre mot de passe</a></span>
                    <span>Vous n'avez pas de compte, <a href="Inscription.php">créez-en un ?</a></span>
                    <span>Copyright <?php echo "&copy; " . date("Y") . " Panea technologies. Tous droits réservés."; ?></span>
                </div>
                
            </form>
        </div>
    </section>
</body>
</html>