<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin Homepage</title>
</head>
<body>
<div class="antialiased text-gray-900 px-6">
    <div class="max-w-xl mx-auto py-12 divide-y md:max-w-8xl">
        <div class="py-8">
            <h1 class="text-4xl font-bold">Admin Homepage</h1>
            <p class="mt-2 text-lg text-gray-800">
                Administration des lieux sur notre site.
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
        <h2 class="text-2xl font-bold">Administration de nos datas</h2>
        <div class="mt-8 max-w-md">
            <div class="grid grid-cols-1 gap-6">
        <?php if(isset($message)): ?>
                <h3><?=$message?></h3>
        <?php elseif(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php else: ?>
        <!-- modèle de tableau à remplir avec le foreach -->
        <table class="border-collapse border border-slate-600">
            <tr>
                <th class="border border-slate-600">id</th>
                <th class="border border-slate-600">title</th>
                <th class="border border-slate-600">ourdesc</th>
                <th class="border border-slate-600">latitude</th>
                <th class="border border-slate-600">longitude</th>
                <th class="border border-slate-600">Modifier</th>
                <th class="border border-slate-600">supprimer</th>
            </tr>
                <?php foreach($ourDatas as $item): ?>
                    <tr>
                        <td class="text-center"><?=$item['idourdatas']?></td>
                        <td><?=$item['title']?></td>
                        <td><?=$item['ourdesc']?></td>
                        <td><?=$item['latitude']?></td>
                        <td><?=$item['longitude']?></td>
                        <td><a href="?update=<?=$item['idourdatas']?>"><img src="img/update.png" width="32" height="32" alt="update" /></a></td>
                        <td><a href="?delete=<?=$item['idourdatas']?>"><img src="img/delete.png" width="32" height="32" alt="delete" /></a></td>
                    </tr>
                <?php endforeach; ?>
        </table>
        <?php endif; ?>
            </div>

        </div>

    </div>
</body>
</html>