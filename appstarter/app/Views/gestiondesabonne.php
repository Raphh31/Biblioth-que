<body>
    <h1>Gestion des abonnés</h1>

    <table id="tababonne">
        <thead>
            <tr>
                <th> </th>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Date de Naissance</th>
                <th>Date d'Adhésion</th>
                <th>Adresse</th>
                <th>Téléphone</th>
                <th>CSP</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($abonnes as $abonne): ?>
                <tr>
                <td>
                    <form action="<?= base_url('/modifyAbo') ?>" method="post">
                        <td><label for='matricule_abonne'>matricule_abonne :</label>
                        <input type="text" id='matricule_abonne' name='matricule_abonne' value = "<?php echo htmlspecialchars( $abonne['matricule_abonne']); ?>" /> <br>

                        <td><label for='nom_abonne'>Nom :</label>
                        <input type="text" id='nom_abonne' name='nom_abonne' value = "<?php echo htmlspecialchars( $abonne['nom_abonne']); ?>" /> <br>

                        <td><label for='date_naissance_abonne'>date_naissance_abonne :</label>
                            <input type="text" id='date_naissance_abonne' name='date_naissance_abonne' value = "<?php echo htmlspecialchars( $abonne['date_naissance_abonne']); ?>" /> <br>

                        <td><label for='date_adhesion_abonne'>date_adhesion_abonne :</label>
                        <input type="text" id='date_adhesion_abonne' name='date_adhesion_abonne' value = "<?php echo htmlspecialchars( $abonne['date_adhesion_abonne']); ?>" /> <br>

                        <td><label for='adresse_abonne'>adresse_abonne :</label>
                        <input type="text" id='adresse_abonne' name='adresse_abonne' value = "<?php echo htmlspecialchars( $abonne['adresse_abonne']); ?>" /> <br>

                        <td><label for='telephone_abonne'>telephone_abonne :</label>
                        <input type="text" id='telephone_abonne' name='telephone_abonne' value = "<?php echo htmlspecialchars( $abonne['telephone_abonne']); ?>" /> <br>

                        <td><label for='CSP_abonne'>CSP_abonne :</label>
                        <input type="text" id='CSP_abonne' name='CSP_abonne' value = "<?php echo htmlspecialchars( $abonne['CSP_abonne']); ?>" /> <br>

                        <td> <input class="bouton" type="submit" value="Modifier">

                    </form>
                    <a href="/supprimeAbo?matricule_abonne=<?= $abonne['matricule_abonne'] ?>">Supprimer</a>
                    </div>
                </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
    </table>
    <h3><a href="/creeAbonne">Créer un nouvelle abonne</a> </h3>