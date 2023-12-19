<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Début de l'en-tête de la page -->
    <div class="nav-bar">
        <div class="logo">
            <h1>POSIL<span>AX</span></h1>
        </div>
        <div class="nav-bar-menus">
            <div class="icon-notify">
                <img src="icons/icons8_notification.ico" alt="">
            </div>
            <div class="user-profil">
                <img src="icons/male_user_100px.png" alt="">
            </div>
        </div>
   </div>
   <!-- Fin de l'en-tête de la page -->
   <div class="dashboard-content">
    <div class="add-person" id="add-person">
        <img src="svg/add-user-left-5-svgrepo-com.svg"  alt="ajouter une personne">
        <span>Ajouter une personne</span>
    </div>
    <div class="search-person" id="search-person">
        <img src="svg/search-user-wearing-tie-svgrepo-com.svg" alt="">
        <span>Chercher une personne</span>
    </div>
    <div class="edit-person" id="edit-person">
        <img src="svg/edit-user-left-svgrepo-com.svg" alt="">
        <span>Modifier le paramètre d'une personne</span>
    </div>
   </div>
        <center>
            <div class="indications">
            <span>Copyright <?php echo "&copy; " . date("Y") . " Panea technologies. Tous droits réservés."; ?></span>
            </div>
        </center>
    <script src="script.js"></script>    
</body>
</html>