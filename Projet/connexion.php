<?php

require "src/header.php";
require_once 'src/db.php';
try {
    require_once 'src/db.php';
    $connection = connect_pdo();
}catch (PDOException $e) {
            if ($e->getCode() == 23000) {
                $error_message = "Ce nom d'utilisateur est déjà utilisé!";
            }
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="login" id="login" placeholder="Nom d'utilisateur" required>
        <input type="text" name="password" id="password" placeholder="Mot de passe" required>
        <input type="submit">
    </form>
</body>
</html>


<?php

function connection_verification() {
    if ($_POST["login"] == $login) {
        function password_verify($password, $hashedPassword) {
            if ($password == $hashedPassword) {
                $connecte = true;
            }else{
            echo "Mot de passe invalide.";
        }
    }
    }else{
        echo "Nom d'utilisateur invalide.";
    }}

?>