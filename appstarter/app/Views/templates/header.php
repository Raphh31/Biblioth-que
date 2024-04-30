<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles.css'); ?>" />
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/styles.css'); ?>" />
    <script src="<?php echo base_url('assets/JS/Scripts.js'); ?>"></script>
</head>
<header>
    <title>BIBLIOTHEQUE G X L</title>
    <nav>
        <table>
            <tr class="sous-menu">
                <th><a href="/home">Accueil</a></th>
                <th><a href="/espaceAbonne">Espace Abonné </a></th>
                <th><a href="/gestiondeslivres">Gestion des livres</a></th>
                <th><a href="/gestiondesabonne">Gestion des Abonnées</a></th>
            </tr>
        </table>
        </div>

        <?php if (isset($loggedIn) && $loggedIn == true) : ?>
            <span>Bonjour, <?= esc($name) ?></span>
        <?php endif ?>
        </li>
        </th>
    </nav>