<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficher les Cookies</title>
    <!-- PicoCSS -->
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.5.7/css/pico.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <main class="container">
        <h2><i class="fas fa-cookie"></i> Afficher les Cookies</h2>
        <?php
        // Vérifier si les cookies existent
        if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
            echo "<article class='grid'>
                    <div><i class='fas fa-user'></i> <strong>Login :</strong> " . htmlspecialchars($_COOKIE['login']) . "</div>
                    <div><i class='fas fa-lock'></i> <strong>Mot de passe :</strong> " . htmlspecialchars($_COOKIE['password']) . "</div>
                  </article>";
        } else {
            echo "<blockquote class='secondary'><i class='fas fa-exclamation-triangle'></i> Aucun cookie trouvé. Veuillez vous connecter pour générer des cookies.</blockquote>";
        }
        ?>
        <br>
        <a href="login_form.php" role="button"><i class="fas fa-arrow-left"></i> Retour au formulaire de connexion</a>
        <a href="update_cookies.php" role="button" class="secondary"><i class="fas fa-sync-alt"></i> Mettre à jour les cookies</a>
    </main>
</body>
</html>
