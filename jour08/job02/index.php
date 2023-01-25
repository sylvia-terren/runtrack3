<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>[Jour 08] Tailwind | Job 02</title>
</head>
<body>

    <header class="flex justify-evenly w-full bg-green-200">
        <nav class="flex py-2 md:py-4">
            <a href="index.php" class="p-2 lg:px-4 md:mx-3 text-white rounded bg-green-400">Accueil</a>
            <a href="index.php" class="p-2 lg:px-4 md:mx-3 text-white rounded bg-green-500">Inscription</a>
            <a href="index.php" class="p-2 lg:px-4 md:mx-3 text-white rounded bg-green-600">Connexion</a>
            <a href="index.php" class="p-2 lg:px-4 md:mx-3 text-white rounded bg-green-700">Rechercher</a>
        </nav>
    </header>

    <section>
        <h1>Pas encore de compte ?</h1>
        <form>
            <div>
                <label for="civilite">Civilité</label>
                <input type="radio" name="mr">Monsieur
                <input type="radio" name="mme">Madame
            </div>
            <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="name">
            </div>
            <div>
                <label>Nom</label>
                <input type="text">
            </div>
            <div>
                <label>Adresse</label>
                <input type="text">
            </div>
            <div>
                <label>Email</label>
                <input type="email">
            </div>
            <div>
                <label>Mot de passe</label>
                <input type="password">
            </div>
            <div>
                <label>Comfirmez le mot de passe</label>
                <input type="password">
            </div>
            <div>
                <label>Passions</label>
                <input type="checkbox">Informatique
                <input type="checkbox">Voyages
                <input type="checkbox">Sport
                <input type="checkbox">Lecture
            </div>
            <div>
                <input type="submit" value="Valider">
            </div>
        </form>
    </section>

    <footer>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="index.php">Inscription</a>
            <a href="index.php">Connexion</a>
            <a href="index.php">Rechercher</a>
        </nav>
    </footer>

</body>
</html>