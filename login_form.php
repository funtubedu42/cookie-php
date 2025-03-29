<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <!-- PicoCSS -->
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.5.7/css/pico.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <main class="container">
        <h2><i class="fas fa-sign-in-alt"></i> Formulaire de Connexion</h2>
        <form method="post" action="">
            <label for="login"><i class="fas fa-user"></i> Login :</label>
            <input type="text" id="login" name="login" required>
            <label for="password"><i class="fas fa-lock"></i> Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="contrast"><i class="fas fa-paper-plane"></i> Envoyer</button>
        </form>
        <?php
        // Vérifier si le formulaire a été soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = htmlspecialchars($_POST['login']);
            $password = htmlspecialchars($_POST['password']);

            // Stocker les informations dans des cookies
            setcookie('login', $login, time() + 5, "/"); // Cookie valide pendant 1 heure
            setcookie('password', $password, time() + 5, "/"); // Cookie valide pendant 1 heure

            echo "<p style='color: green;'><i class='fas fa-check-circle'></i> Vos informations ont été mises à jour avec succès dans les cookies !</p>";
        } else {
            // Vérifier si les cookies existent et les afficher
            if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
                echo "<p style='color: lightblue;'><i class='fas fa-info-circle'></i> Vous avez déjà des données stockées dans les cookies. Si vous envoyez de nouvelles informations, les anciennes seront perdues.</p>";
            } else {
                echo "<p style='color: red;'><i class='fas fa-exclamation-triangle'></i> Aucune information de connexion trouvée dans les cookies.</p>";
            }
        }
        ?>
        <br>
        <a href="show_cookies.php" role="button"><i class="fas fa-eye"></i> Voir les cookies</a>
        <a href="update_cookies.php" role="button" class="secondary"><i class="fas fa-sync-alt"></i> Mettre à jour les cookies</a>
    </main>
</body>
</html>
