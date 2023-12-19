<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icons/enter_90px.png">
    <?php //include 'config.php'; ?>
</head>
<body>
    <section class="inscription">
        <div class="inscription-form">
            <form action="" method="post">

                <div class="image-user">
                    <img class="image" id="user-profil" src="icons/male_user_100px.png" alt="">
                </div>
                <div class="Inputs">
                    <label for="pseudo-user-or-admin">Votre nom</label>
                    <input type="text" name="pseudo-user-or-admin" required="required">
                    <label for="pwd-user-or-admin">Entrez un mot de passe</label>
                    <input type="password" name="pwd-user-or-admin" required="required">
                    <label for="confirmer-mot-de-passe">Confirmer votre mot de passe</label>
                    <input type="password" name="confirmer-mot-de-passe">
                    <label for="type-user">Type d'utilisateur</label>
                    <select name="type-user" id="type-user" required="required">
                        <option value=""></option>
                        <option value="Invité">Invité</option>
                        <option value="Administrateur">Administrateur</option>
                    </select>
                </div>
                <div class="buttons">
                    <button type="submit" name="create">S'inscrire</button>
                </div>

                <div class="indications-register">
                    <span>Vous avez déjà un compte, <a href="Connexion.php">Se connecter</a></span>
                    <span>Copyright <?php echo "&copy; " . date("Y") . " Panea technologies. Tous droits réservés."; ?></span>
                </div>
            </form>
            <?php
           // include_once 'config.php';
            $connetion= new PDO('mysql:host=localhost;dbname=posilax','root','');
            $connetion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            if (isset($_POST['create'])) {
                $pseudo=$_POST['pseudo-user-or-admin'];
                $pwd=$_POST['pwd-user-or-admin'];
                $c_pwd=$_POST['confirmer-mot-de-passe'];
                $type=$_POST['type-user'];
                if ($pwd == $c_pwd){
                    // Inseret dans la base données
                    $sql="INSERT INTO admin_compte(Id, Nom, Password, Type) VALUES (null,'$pseudo','$pwd','$type')";
                    $connetion->query($sql);
                    if ($type=="Invité"){
                        echo '<script>
                            alert("Félicitation '.$pseudo.' votre compte invité à été créer avec succès, vous allez être rediriger vers la page d\'acceuil dans quelques secondes... ")
                        </script>';
                        echo '
                        <script>
                        setTimeout(function(){
                            window.location.href = "Home.php";
                        }, 15000);
                     </script>
                        ';
                    }else {
                        echo '<script>
                        alert("Félicitation '.$pseudo.' votre compte administrateur à été créer avec succès, vous allez être rediriger vers la page d\'acceuil dans quelques secondes... ")
                    </script>';
                        echo '
                        <script>
                        setTimeout(function(){
                            window.location.href = "Home.php";
                        }, 15000);
                     </script>
                        ';
                    }
                }else {
                    echo '<script type="text/javaScript">
                            alert("Mot de passe incorrect, veillez mettre un bon mot de passe.");
                            </script>';
                }
            }
            ?>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>