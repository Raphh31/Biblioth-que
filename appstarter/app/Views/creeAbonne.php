

<body>
<h1>crée un nouvelle abonné</h1>


<form action="<?= base_url('/addAbo') ?>" method="post">
                        <label for='matricule_abonne'>matricule_abonne :</label>
                        <input type="text" id='matricule_abonne' name='matricule_abonne' ><br>

                        <label for='nom_abonne'>Nom :</label>
                        <input type="text" id='nom_abonne' name='nom_abonne' ><br>

                        <label for='date_naissance_abonne'>date_naissance_abonne :</label>
                        <input type="text" id='date_naissance_abonne' name='date_naissance_abonne' ><br>

                        <label for='date_adhesion_abonne'>date_adhesion_abonne :</label>
                        <input type="text" id='date_adhesion_abonne' name='date_adhesion_abonne' ><br>

                        <label for='adresse_abonne'>adresse_abonne :</label>
                        <input type="text" id='adresse_abonne' name='adresse_abonne'><br>

                        <label for='telephone_abonne'>telephone_abonne :</label>
                        <input type="text" id='telephone_abonne' name='telephone_abonne'><br>

                        <label for='CSP_abonne'>CSP_abonne :</label>
                        <input type="text" id='CSP_abonne' name='CSP_abonne'><br>

                        <input class="bouton" type="submit" value="Valider">

                    </form>
    

    

</html> 

