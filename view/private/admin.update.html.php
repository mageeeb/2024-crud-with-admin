<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
    <title>Admin Update</title>
</head>
<body>
<div class="antialiased text-gray-900 px-6">
    <div class="max-w-xl mx-auto py-12 divide-y md:max-w-8xl">
        <div class="py-8">
            <h1 class="text-4xl font-bold">Admin Update</h1>
            <p class="mt-2 text-lg text-gray-800">
                Mettre à jour un lieu dans la DB.
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
            <h2 class="text-2xl font-bold">Update d'une data</h2>
        <?php if(isset($error)) echo "<h3>$error</h3>"; ?>
            <br>
            <div class="grid grid-cols-1 gap-6">

       <form action="" name="ourdatas" method="POST">
           <label class="block">
               <span class="text-gray-700">Title</span>
        <input class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="title" placeholder="title" value="<?=$data['title']?>" required>
           </label>
           <label class="block">
               <span class="text-gray-700">description</span>
        <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="ourdesc" placeholder="Descrition" required><?=$data['ourdesc']?></textarea>
           </label>
           <label class="block">
               <span class="text-gray-700">latitude</span>
        <input class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" step="0.00000000001" name="latitude" placeholder="latitude" value="<?=$data['latitude']?>" required>
           </label>
           <label class="block">
               <span class="text-gray-700">longitude</span>
        <input class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" step="0.00000000001" name="longitude" placeholder="longitude" value="<?=$data['longitude']?>" required>
           </label>
        <input type="hidden" name="id" value="<?=$data['idourdatas']?>" />
        <input class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="submit" value="Modifier" />
       </form>
    </div>
</body>
</html>