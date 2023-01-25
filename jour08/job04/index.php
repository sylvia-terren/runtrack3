<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>[Jour 08] Tailwind | Job 04</title>
</head>

<body class="bg-green-500">

    <header class="flex justify-evenly w-full bg-green-200">
        <nav class="flex py-2 md:py-4">
            <a href="index.php" class="p-2 lg:px-4 md:mx-3 text-white rounded bg-green-400">Accueil</a>
            <a href="index.php" class="p-2 lg:px-4 md:mx-3 text-white rounded bg-green-500">Inscription</a>
            <a href="index.php" class="p-2 lg:px-4 md:mx-3 text-white rounded bg-green-600">Connexion</a>
            <a href="index.php" class="p-2 lg:px-4 md:mx-3 text-white rounded bg-green-700">Rechercher</a>
        </nav>
    </header>

    <section class="p-7 md:py-2">
        <h1 class="font-semibold text-green-900 font-sans text-3xl">Pas encore de compte ?</h1>
        <form class="w-full max-w-xs">
            <div class="text-green-900 font-bold mb-2">
                <label for="civilite">Civilité</label>
                <input type="radio" name="mr">Monsieur
                <input type="radio" name="mme">Madame
            </div>
            <div>
                <label for="prenom" class="block text-green-900 font-bold mb-2">Prénom</label>
                <input type="text" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div>
                <label class="block text-green-900 font-bold mb-2">Nom</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div>
                <label class="block text-green-900 font-bold mb-2">Adresse</label>
                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div>
                <label class="block text-green-900 font-bold mb-2">Email</label>
                <input type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div>
                <label class="block text-green-900 font-bold mb-2">Mot de passe</label>
                <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div>
                <label class="block text-green-900 font-bold mb-2">Comfirmez le mot de passe</label>
                <input type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div>
                <label class="block text-green-900 font-bold mb-2">Passions</label>
                <input type="checkbox">Informatique
                <input type="checkbox">Voyages
                <input type="checkbox">Sport
                <input type="checkbox">Lecture
            </div>
            <div>
                <input type="submit" value="Valider" class="p-2 lg:px-4 md:mx-3 text-white rounded bg-green-600">
            </div>
        </form>
    </section>
    <footer class="bottom-0 w-full flex justify-around w-full bg-green-900">
        <nav class="flex py-2 md:py-4">
            <a href="index.php" class="p-2 lg:px-4 md:mx-3 text-white">Accueil</a>
            <a href="index.php" class="p-2 lg:px-4 md:mx-3 text-white">Inscription</a>
            <a href="index.php" class="p-2 lg:px-4 md:mx-3 text-white">Connexion</a>
            <a href="index.php" class="p-2 lg:px-4 md:mx-3 text-white">Rechercher</a>
        </nav>
    </footer>
</body>

</html>

<!--icone by Heroicon--> 