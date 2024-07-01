<?php require_once('../controller/connectionController.php') ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <form method="post" >
        <div>
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Connexion</button>
        </div>
    </form>
</body>
</html>


<?php if ($_SERVER["REQUEST_METHOD"] === "POST") { ?>

    <?php if ($_POST['username'] === 'david' && $_POST['password'] === 'test') { ?>
        
        <?php logUser(); ?>
        <?php redirectToAdmin(); ?>

    <?php } else { ?>

        <p>Mauvais identifiants</p>
            
    <?php } ?>

<?php } ?>

