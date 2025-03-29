<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mettre à Jour les Cookies</title>
    <!-- PicoCSS -->
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.5.7/css/pico.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <main class="container">
        <h2><i class="fas fa-cookie"></i> Mettre à Jour les Cookies</h2>
        <form method="post" action="">
            <label for="new_login"><i class="fas fa-user"></i> Nouveau Login :</label>
            <input type="text" id="new_login" name="new_login" required>
            <label for="new_password"><i class="fas fa-lock"></i> Nouveau Mot de passe :</label>
            <input type="password" id="new_password" name="new_password" required>
            <button type="submit" class="contrast"><i class="fas fa-sync-alt"></i> Mettre à jour</button>
        </form>
        <?php
        // Vérifier si le formulaire a été soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $new_login = htmlspecialchars($_POST['new_login']);
            $new_password = htmlspecialchars($_POST['new_password']);

            // Mettre à jour les cookies
            setcookie('login', $new_login, time() + 3600, "/"); // Cookie valide pendant 1 heure
            setcookie('password', $new_password, time() + 3600, "/"); // Cookie valide pendant 1 heure

            echo "<p style='color: green;'><i class='fas fa-check-circle'></i> Les cookies ont été mis à jour avec succès !</p>";
        }
        ?>
        <br>
        <a href="login_form.php" role="button"><i class="fas fa-arrow-left"></i> Retour au formulaire de connexion</a>
        <a href="show_cookies.php" role="button" class="secondary"><i class="fas fa-eye"></i> Voir les cookies</a>
    </main>
</body>
</html>