
<body>
<h1>Ajouter un nouveau livre</h1>


<form action="<?= base_url('/addlivre') ?>" method="post">


                        <label for='code_catalogue'>code_catalogue :</label>
                        <input type="text" id='code_catalogue' name='code_catalogue'><br>

                        <label for='titre_livre'>titre_livre :</label>
                        <input type="text" id='titre_livre' name='titre_livre'><br>

                        <label for='theme_livre'>theme_livre :</label>
                        <input type="text" id='theme_livre' name='theme_livre'><br>
                        <input class="bouton" type="submit" value="Valider">

                    </form>
    

    

</html> 
