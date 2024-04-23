<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <title>Admin Insertion</title>
</head>
<body>
<div class="antialiased text-gray-900 px-6">
    <div class="max-w-xl mx-auto py-12 divide-y md:max-w-8xl">
        <div class="py-8">
            <h1 class="text-4xl font-bold">Admin Insertion</h1>
            <p class="mt-2 text-lg text-gray-800">
                Insertion d'un nouveau lieu dans la DB.
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
        <?php if(isset($error)) echo "<h3>$error</h3>"; ?>
        <form action="" name="ourdatas" method="POST">
        <div class="py-12">
            <h2 class="text-2xl font-bold">Ajoutez votre lieu</h2>
            <div class="mt-8 max-w-md">
                <div class="grid grid-cols-1 gap-6">
                    <label class="block">
                        <span class="text-gray-700">Titre</span>
        <input class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="title" placeholder="title" required>
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Description</span>
            <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" rows="3" name="ourdesc" placeholder="Descrition" required></textarea>
                    </label>
                    <label class="block">
                        <span class="text-gray-700">Latitude</span>
            <input class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" step="0.00000000001" name="latitude" placeholder="latitude" required><br>
                    </label>
                        <label class="block">
                            <span class="text-gray-700">Longitude</span>
                        <input class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" step="0.00000000001" name="longitude" placeholder="longitude" required>
                        </label>
                            <label class="block">
        <input class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="submit" value="Insérer" /></div>
            </div>
       </form>
    </div>
</div>
</body>
</html>