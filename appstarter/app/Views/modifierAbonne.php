

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
                <form action="<?= base_url('/abonne/add') ?>" method="post">
                    <label for=$abonne['nom_abonne']>Nom :</label>
                    <input type="text" id=$abonne['nom_abonne'] name=$abonne['nom_abonne']><br>
                    <input class="bouton" type="submit" value="Valider">
                </form>
                </tr>
                
            <?php endforeach; ?>


            </tbody>
    </table>

    



</html> 

