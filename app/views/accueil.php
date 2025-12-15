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
        <h1>Bienvenue sur notre site</h1>
        <section class="">
            <table>
                <thead>
                    <tr>
                        <td>Chauffeur</td>
                        <td>Vehicule</td>
                        <td>Date</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($ListeVehiculeChauffeur as $VehiculeChauffeur) { ?>
                        <tr>
                            <td><?php echo $VehiculeChauffeur['Chauffeur']['nom']?></td>
                            <td><?php echo $VehiculeChauffeur['Vehicule']['nom']?></td>
                            <td><?php echo $VehiculeChauffeur['daty']?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 E-Taxibe</p>
    </footer>
</body>
</html>