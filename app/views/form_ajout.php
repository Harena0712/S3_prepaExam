<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - E-commerce</title>
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <a href="index.html" class="logo">E-Varotra</a>
                <ul class="menu">
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="/produit/form_ajout">ajouter</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <h1 class="product-form-h1">Formulaire d'ajout</h1>
        <section class="product-form">
            <form action="/ajout" method="post" enctype="multipart/form-data">
                <input type="text" name="name" placeholder="  Nom du poroduit">
                <input type="number" name="prix" placeholder="  Prix du poroduit">
                <label for="media">Fichier(image)</label>
                <input type="file" id="media" name="fichier" accept="image/*">
                <input type="submit" value="Ajouter">
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 E-Varotra</p>
    </footer>
</body>
</html>