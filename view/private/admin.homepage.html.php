<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Homepage</title>
</head>
<body>
    <h1>Admin Homepage</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil Admin</a></li>
            <li><a href="?insert">Ajouter une data</a></li>
            <li><a href="?disconnect">Déconnexion</a>
            
        </ul>
    </nav>
    <div class="content">
        <h2>Administration de nos datas</h2>
        <?php if(isset($message)): ?>
                <h3><?=$message?></h3>
        <?php elseif(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php else:
                foreach($ourDatas as $item): ?>
                    |
                <?php endforeach; ?>
        <?php endif; ?>
        <!-- modèle de tableau à remplir avec le foreach -->
        <table>
            <tr>
                <th>idourdatas</th>
                <th>title</th>
                <th>ourdesc</th>
                <th>latitude</th>
                <th>longitude</th>
                <th>Modifier</th>
                <th>supprimer</th>
            </tr>
            <tr>
                <td>1</td>
                <td>exemple 1</td>
                <td>Ceci est la description de l'exemple 1</td>
                <td>0.25698</td>
                <td>7.546548</td>
                <td><img src="img/update.png" width="32" height="32" alt="update" /></td>
                <td><img src="img/delete.png" width="32" height="32" alt="delete" /></td>
            </tr>
        </table>
    </div>
</body>
</html>