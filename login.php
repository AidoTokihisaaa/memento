<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>Page de Connexion</title>
</head>
<body>
    
    <div class="background"></div>
    <div class="container">
        <h2>Connexion</h2>
        <form>
            <div class="form-group">
                <label for="username"><span class="fas fa-user"></span> Nom d'utilisateur</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password"><span class="fas fa-lock"></span> Mot de passe</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Se connecter</button>
        </form>
        <div class="social-login">
            <button class="btn facebook">Connexion avec Facebook</button>
            <button class="btn google">Connexion avec Google</button>
        </div>
        <div class="forgot-password">
            <a href="#">Mot de passe oublié ?</a>
        </div>
        <div class="signup-now">
            <p>Vous n'avez pas de compte ? <a href="#">Inscrivez-vous maintenant</a></p>
        </div>
    </div>
</body>
</html>