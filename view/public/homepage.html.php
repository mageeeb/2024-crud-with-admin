<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <!-- CSS de Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <!-- ma CSS -->
    <link rel="stylesheet" href="css/carteJSON.css">
</head>
<body>
    <h1>Homepage</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil</a></li>
            <li><a href="?connect">Connexion</a>
        </ul>
    </nav>
    <div class="content">
        <h2>Nos datas</h2>
        <?php /* ?>
        <?php if(isset($message)): ?>
                <h3><?=$message?></h3>
        <?php elseif(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php else:
                foreach($ourDatas as $item): ?>
                    <h4><?=$item['title']?></h4>
                    <p><?=$item['ourdesc']?></p>
                    <p>Latitude : <?=$item['latitude']?></p>
                    <p>Longitude : <?=$item['longitude']?></p>
                <?php endforeach; ?>
        <?php endif;
        */ ?>
        <h1>Récupération de données via JSON et PHP</h1>
        <div id="resultats">
            <div id="carte"></div>
            <div id="liste"></div>
        </div>
    </div>
    <!-- JS de Leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
    <!-- monJS -->
    <script src="js/carteJSON.js"></script>
</body>
</html>