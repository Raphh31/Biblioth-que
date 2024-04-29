
<body>
<h1>Gestion des livres</h1>

    <table>
            <thead>

    <table id=tababonne>
            <thead>

                    <?php foreach ($livres as $livre) : ?>
                <tr>
                <td>
              

                    <form action="<?= base_url('/modifylivre') ?>" method="post">

                     <label for='code_catalogue'>code_catalogue :</label>
                        <input type="text" id='code_catalogue' name='code_catalogue' value = "<?php echo htmlspecialchars( $livre['code_catalogue']); ?>" /> <br>

                        <label for='titre_livre'>titre_livre :</label>
                        <input type="text" id='titre_livre' name='titre_livre' value = "<?php echo htmlspecialchars( $livre['titre_livre']); ?>" /> <br>

                        <label for='theme_livre'>theme_livre :</label>
                        <input type="text" id='theme_livre' name='theme_livre' value = "<?php echo htmlspecialchars( $livre['theme_livre']); ?>" /> <br>
                        <input class="bouton" type="submit" value="Modifier">

                    </form>
                    <a href="/supprimelivre?code=<?= $livre['code_catalogue'] ?>">Supprimer</a>

                    
                </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
    </table>
    <h3><a href="/creelivre">Ajouter un nouveau livre</a> </h3>

    




