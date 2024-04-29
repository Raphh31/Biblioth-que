

<body>
<h1>Gestion des livres</h1>

    <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Theme</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach ($livres as $livre) : ?>
                <tr>
                    <td><?php echo $livre['titre_livre']; ?></td>
                    <td><?php echo $livre['theme_livre']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
    </table>
</html> 