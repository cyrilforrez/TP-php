<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Page protégée par mot de passe</title>
</head>

<body>
    <p>Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central :</p>
    <form action="secret.php" method="post">
        <p>
            <input type="password" name="mdp" />
            <input type="submit" value="Valider" />
        </p>
    </form>
</body>

</html>