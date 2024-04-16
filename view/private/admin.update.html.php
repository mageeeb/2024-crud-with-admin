<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Update</title>
</head>
<body>
    <h1>Admin Update</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil Admin</a></li>
            <li><a href="?insert">Ajouter une data</a></li>
            <li><a href="?disconnect">Déconnexion</a>       
        </ul>
    </nav>
    <div class="content">
        <h2>Update d'une data</h2>
        <?php if(isset($error)) echo "<h3>$error</h3>"; ?>
       <form action="" name="ourdatas" method="POST">
        <input type="text" name="title" placeholder="title" value="<?=$data['title']?>" required><br>
        <textarea name="ourdesc" placeholder="Descrition" required><?=$data['ourdesc']?></textarea><br>
        <input type="number" step="0.00000000001" name="latitude" placeholder="latitude" value="<?=$data['latitude']?>" required><br>
        <input type="number" step="0.00000000001" name="longitude" placeholder="longitude" value="<?=$data['longitude']?>" required><br>
        <input type="hidden" name="id" value="<?=$data['idourdatas']?>" />
        <input type="submit" value="Insérer" />
       </form>
    </div>
</body>
</html>