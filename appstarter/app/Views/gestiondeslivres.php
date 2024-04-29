

<body>
<h1>Gestion des livres</h1>
    <table id=tablivre>
            <thead>
                <tr>
                    <th class = livre>Titre</th>
                    <th class = livre>Theme</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($livres as $livre) : ?>
                <tr>
                    <td class = livre><?php echo $livre['titre_livre']; ?></td>
                    <td class = livre><?php echo $livre['theme_livre']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
    </table>
</div>
</html> 