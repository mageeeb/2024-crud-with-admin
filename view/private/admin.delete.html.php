<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin delete</title>
</head>
<body>
    <h1>Admin delete</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil Admin</a></li>
            <li><a href="?insert">Ajouter une data</a></li>
            <li><a href="?disconnect">Déconnexion</a>
            
        </ul>
    </nav>
    <div class="content">
        <h2>Voulez-vous vraiment supprimer cette data ?</h2>
        <?php if(isset($message)): ?>
                <h3><?=$message?></h3>
        <?php elseif(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php else: ?>
            <h4><?=$data['title']?></h4>
            <p><?=$data['ourdesc']?></p>
            <p>Latitude : <?=$data['latitude']?></p>
            <p>Longitude : <?=$data['longitude']?></p>
            <a href="?delete=<?=$data['idourdatas']?>&confirm">Oui</a> <a href="./">Non</a>
        <?php endif; ?>



    </div>
</body>
</html>