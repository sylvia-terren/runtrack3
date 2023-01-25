<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>[Jour 08] Tailwind | Job 01</title>
</head>

<body>

    <header>
        <nav>
            <a href="index.php">Accueil</a>
            <a href="index.php">Inscription</a>
            <a href="index.php">Connexion</a>
            <a href="index.php">Rechercher</a>
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