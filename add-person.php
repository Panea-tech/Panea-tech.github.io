<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Casier judicière_ajouter une personne</title>
</head>
<body>
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
   <div class="add-person-content">
    <div class="add-person-from">
        <span>AJOUTER UNE PERSONNE</span>
        <form action="" method="post">  
          
            <div class="inputs">
                <input type="text" name="name-person" id="" required placeholder="Nom">
                <input type="text" name="fist-person" id="" required placeholder="Post-nom">
                <input type="text" name="last-person" id="" required placeholder="Prénom">
            </div>
            <div class="inputs">
                <select name="gender" id="gender" required placeholder="Prénom">
                    <option value="">Genre</option>
                    <option value="Male">Male</option>
                    <option value="Femelle">Femelle</option>
                </select>
                <select name="gender" id="gender"  placeholder="Prénom">
                    <option value="">Etat civil *</option>
                    <option value="Male">Marié(e)</option>
                    <option value="Femelle">Célibataire</option>
                </select>
                <input type="text" name="profession" id="" required placeholder="Profession">
                <input type="text" name="partenair" id="" placeholder="Epoux(se) *">
                <input type="number" name="nbr-enf" id="" placeholder="Nombre d'enfants *">
            </div>
            <div class="inputs">
                <input type="text" name="lieu-naiss" id="" placeholder="Lieu de naissance">
                <input type="date" name="birthday" id="" placeholder="Date de naissance">
                <input type="text" name="pere" id="" placeholder="Nom du père">
                <input type="text" name="mere" id="" placeholder="Nom de la mère">
            </div>
            <div class="button-footer">
                <div class="btn">
                <input type="submit" name="btn-valide" value="Valider">
                <input type="button" type="btn-save" value="Sauvegarder">
                </div><small>Tous les champs contenant * ne sont pas obligatoires</small>

            </div>
           
        </form>
    </div>
    <hr>
    <button id="btn-return">Retour</button>
   </div>
        <center>
            <div class="indications">
            <span>Copyright <?php echo "&copy; " . date("Y") . " Panea technologies. Tous droits réservés."; ?></span>
            </div>
        </center>

   <script>
        var btn_return=document.getElementById('btn-return');
        btn_return.addEventListener('click',function() {
        window.location.href="dashboard.php";
        });
   </script>
</body>
</html>