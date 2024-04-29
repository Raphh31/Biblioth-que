

<body>
<h1>Gestion des abonné</h1>

    <table>
            <thead>
                <tr>
                    <th>matricule_abonne </th>
                    <th>nom_abonne </th>
                    <th>date_naissance_abonne </th>
                    <th>date_adhesion_abonne </th>
                    <th>adresse_abonne </th>
                    <th>telephone_abonne </th>
                    <th>CSP_abonne </th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($abonnes as $abonne) : ?>
                <tr>
                    <td><?php echo $abonne['matricule_abonne']; ?></td>
                    <td><?php echo $abonne['nom_abonne']; ?></td>
                    <td><?php echo $abonne['date_naissance_abonne']; ?></td>
                    <td><?php echo $abonne['date_adhesion_abonne']; ?></td>
                    <td><?php echo $abonne['adresse_abonne']; ?></td>
                    <td><?php echo $abonne['telephone_abonne']; ?></td>
                    <td><?php echo $abonne['CSP_abonne']; ?></td>
                    <td><a href="/supprimeAbo?matricule_abonne=<?= $abonne['matricule_abonne'] ?>">Supprimé</a></td>
    
                </tr>
            <?php endforeach; ?>


            </tbody>
    </table>

    



</html> 

