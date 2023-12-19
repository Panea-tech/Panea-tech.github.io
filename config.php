<?php
$connetion= new PDO('mysql:host=localhost;dbname=posilax','root','');
$connetion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>