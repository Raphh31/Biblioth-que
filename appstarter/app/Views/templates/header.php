<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles.css');?>"/>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles.css');?>"/>
    <script src="<?php echo base_url('assets/JS/Scripts.js');?>"></script>    
</head>
<header>
<title>BIBLIOTHEQUE G X L</title> 
<nav>
        <ul class="sous-menu">
        <div class="text-gradient">
            <li><a href="/home">MENU</a></li>
            <li><a href="/home">Accueil</a></li>
            <li><a href="/login"> Espace Abonné </a></li>
            <li><a href="/gestiondeslivres">Gestion des livres</a></li>
            <li><a href="/gestiondesabonne">Gestion des Abonnées</a></li>
    </ul>
</div>    

<?php if (isset($loggedIn) && $loggedIn == true) : ?>
        <span>Bonjour, <?= esc($name) ?></span>
    <?php endif ?>
</li></ul></nav>

     