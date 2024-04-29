

<body>
<h1>Gestion des abonné</h1>

    <table id=tababonne>
            <thead>
                <tr>
                    <th class=abonne>matricule_abonne </th>
                    <th class=abonne>nom_abonne </th>
                    <th class=abonne>date_naissance_abonne </th>
                    <th class=abonne>date_adhesion_abonne </th>
                    <th class=abonne>adresse_abonne </th>
                    <th class=abonne>telephone_abonne </th>
                    <th class=abonne>CSP_abonne </th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($abonnes as $abonne) : ?>
                <tr>
                    <td class=abonne><?php echo $abonne['matricule_abonne']; ?></td>
                    <td class=abonne><?php echo $abonne['nom_abonne']; ?></td>
                    <td class=abonne><?php echo $abonne['date_naissance_abonne']; ?></td>
                    <td class=abonne><?php echo $abonne['date_adhesion_abonne']; ?></td>
                    <td class=abonne><?php echo $abonne['adresse_abonne']; ?></td>
                    <td class=abonne><?php echo $abonne['telephone_abonne']; ?></td>
                    <td class=abonne><?php echo $abonne['CSP_abonne']; ?></td>
                    <td class=abonne><a href="/gestiondesabonne?matricule_abonne=<?= $abonne['matricule_abonne'] ?>">Supprimé</a></td>
    
                </tr>
            <?php endforeach; ?>


            </tbody>
    </table>

    



</html> 

