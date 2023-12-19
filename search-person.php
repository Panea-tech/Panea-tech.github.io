<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Casier judicière_chercher une personne</title>
</head>
<body>
     <!-- création du Modal pour la recherche avce image -->
     <aside class="Modal-serach-by-iamge" id="Modal-serach-by-iamge">
       <button id="CloseModal">X</button>
    </aside>
   <!-- Fin de la création du Modal pour la recherche avce image -->

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
   <div class="search-person-content">
    <div class="search-zone">
        <input type="search" name="search-person" id="" placeholder="Recherche">
        <img src="icons/icons8_search.ico" alt="">
    </div>
    <div class="search-box">
        <div class="input-information-person">
            <span>Rendez votre recherche plus spécifique en précisant <br>des informations concernant la personne que vous recherchée.</span>
            <form action="" method="post">  
                <input type="text" name="name-search-person" id="" placeholder="Nom" focus="true">
                <input type="text" name="first-search-person" id="" placeholder="Post-nom">
                <input type="text" name="last-search-person" id="" placeholder="Prénom">
                <input type="number" name="age-search-person" id="" placeholder="Age">
                <input type="text" name="LN-search-person" id="" placeholder="Lieu de naissance">
                <input type="submit" value="Rechercher">
            </form>
            <span>Faire la recherche plus avancée a partir d'une image <a href="#" id="OpenModal">cliquer ici</a></span>
        </div>
        <div class="output-information-person">
            <span>Le résultat de la recherche apparaîtront ici</span>
            <div class="output-information-person-box">
                <div class="picture-search-person">

                </div>
            </div>
            
        </div>

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
        <script>
            var open_modal=document.getElementById("OpenModal");
            open_modal.addEventListener('click',function() {
                var modal=document.getElementById("Modal-serach-by-iamge");
                modal.style.display="block";
                modal.style.focus="true"

            })

            var close_modal=document.getElementById("CloseModal");
            close_modal.addEventListener('click',function() {
                var modal=document.getElementById("Modal-serach-by-iamge");
                modal.style.display="none";
            })
        </script>
</body>
</html>