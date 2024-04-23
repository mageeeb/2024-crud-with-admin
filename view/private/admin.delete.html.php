<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Delete</title>
</head>
<body>
<div class="antialiased text-gray-900 px-6">
    <div class="max-w-xl mx-auto py-12 divide-y md:max-w-8xl">
        <div class="py-8">
            <h1 class="text-4xl font-bold">Admin Delete</h1>
            <p class="mt-2 text-lg text-gray-800">
                Suppression d'un lieu dans la DB.
            </p>
        </div>
        <nav class="flex sm:col-span-1">
            <ol role="list" class="flex items-center space-x-2 sm:space-x-5">
                <li class="flex items-center">
                    <div>
                        <a href="./">Accueil Admin</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <a href="?insert">Ajouter une data</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <a href="?disconnect">Déconnexion</a>
                    </div>
                </li>
            </ol>
        </nav>
        <div class="py-12">

        <?php if(isset($message)): ?>
                <h3><?=$message?></h3>
        <?php elseif(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php else: ?>
            <h4 class="text-2xl">Titre : <?=$data['title']?></h4>
            <p class="text-2xl"><?=$data['ourdesc']?></p>
            <p class="text-2xl">Latitude : <?=$data['latitude']?></p>
            <p class="text-2xl">Longitude : <?=$data['longitude']?></p>
            <hr>
            <h2 class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">Voulez-vous vraiment supprimer cette data ?</h2>
            <a  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" href="?delete=<?=$data['idourdatas']?>&confirm">Oui</a> <a class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"  class="text-2xl" href="./">Non</a>
        </div>
        <?php endif; ?>

    </div>
</div>
</body>
</html>