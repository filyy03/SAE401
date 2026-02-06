<!-- fichier pour se connecter à l'espace de gestion des adhérents -->

<?php
session_start();
require_once "../lib/config.php"; // connexion BDD

$message = ""; // cela le message d'erreur affiché en cas d’échec de connexion

// traite le formulaire de connexion
if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

     // sert à récuperer l’utilisateur correspondant au username
    $sql = "SELECT * FROM utilisateurs WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    // sert à vérifier le mot de passe
    if ($user && password_verify($password, $user['password'])) {
        
        // créer une session utilisateur
        $_SESSION['username'] = $user['username'];

        // redirection vers index.php
        header("Location: index.php");
        exit;
    } else {
        $message = "Login ou mot de passe incorrect";
    }
}
?>

<!-- formulaire de connexion-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>CONNEXION</h1>

<form method="post" class="formulaire">
    <label>Username : </label>
    <input type="text" name="username" required><br><br>
    <label>Mot de passe : </label>
    <input type="password" name="password" required><br><br>
    <button type="submit" name="login">Se connecter</button>
</form>

</body>
</html>
