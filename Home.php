<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
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
   <section class="home-page">
   <div class="home-pub">
    <div class="woman-police-image">
        <img src="svg/policewoman-professions-and-jobs-svgrepo-com.svg"  width="400px" height="400px" alt="no image dispo">
    </div>
    <div class="pub-text">
    <!--<a href="#"><span>Demmarer</span></a>-->
    <p>POSIL<span>AX</span> <br>Pour des problèmes liés aux recherches limité dans le domaine de renséignement et celui de l'armée congolaise en ce qui concerne les suspects, les detenus, et même consulter le casier judicière de certains, la firme Panea technologies CO LTD
        à penser a mettre en place un logiciel doté de la téchnologie nécessaire afin de rendre accésible et a porter de mains une recherche avancée en utilisant de l'intéligence artificelle. </p>
    
        <button type="button" id="btn-start">Commencer</button>
        <hr style="width=100%">
        <div class="class-Icons" >
            <a href="#" style="background:none"><img src="icons/icons8_facebook_black.ico" alt=""></a>
            <a href="#" style="background:none"><img src="icons/icons8_GitHub_black.ico" alt=""></a>
            <a href="#" style="background:none"><img src="icons/icons8_LinkedIn_Circled_black.ico" alt=""></a>
            <a href="#" style="background:none"><img src="icons/icons8_Instagram_black.ico" alt=""></a>
        </div>
        <center>
            <div class="indications">
            <span>Copyright <?php echo "&copy; " . date("Y") . " Panea technologies. Tous droits réservés."; ?></span>
            </div>
        </center>


    </div>
    <script>
        var start=document.getElementById("btn-start");
        start.addEventListener('click',function() {
            window.location.href="dashboard.php";
        });
    </script>
    
   </div>
   </section>
</body>
</html>