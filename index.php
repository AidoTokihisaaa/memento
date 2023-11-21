<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Momento</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="register.php">Register</a>
                <a href="login.php">Login</a>
            </div>
        </nav>
    </header>
    <div class="container">
        <h3 class="titre animate__animated animate__fadeInDown">Memento</h3>
        <button class="bouton animate__animated animate__fadeInUp">Add Post-It</button>
    </div>
    <div class="post-its">
        <div class="post-it animate__animated animate__fadeIn">
            <h3>This is a post-it</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac quam ac lectus scelerisque semper.</p>
            <div class="close-icon">&times;</div>
            <label for="start"></label>
            <input type="date" id="start" name="trip-start" value="2035-07-22" min="2018-01-01" max="2035-12-31" />
        </div>
        <div class="post-it animate__animated animate__fadeIn">
            <h3>This is another post-it</h3>
            <p>Curabitur ac quam ac lectus scelerisque semper.</p>
            <div class="close-icon">&times;</div>
            <label for="start"></label>
            <input type="date" id="start" name="trip-start" value="2035-07-22" min="2018-01-01" max="2035-12-31" />
        </div>
        <div class="post-it animate__animated animate__fadeIn">
            <h3>This is a third post-it</h3>
            <p>Quisque scelerisque semper.</p>
            <div class="close-icon">&times;</div>
            <label for="start"></label>
            <input type="date" id="start" name="trip-start" value="2035-07-22" min="2018-01-01" max="2035-12-31" />
        </div>
    </div>
    <div class="post-its">
        <div class="post-it animate__animated animate__fadeIn">
            <h3>This is a post-it</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ac quam ac lectus scelerisque semper.</p>
            <div class="close-icon">&times;</div>
            <label for="start"></label>
            <input type="date" id="start" name="trip-start" value="2035-07-22" min="2018-01-01" max="2035-12-31" />
        </div>
        <div class="post-it animate__animated animate__fadeIn">
            <h3>This is another post-it</h3>
            <p>Curabitur ac quam ac lectus scelerisque semper.</p>
            <div class="close-icon">&times;</div>
            <label for="start"></label>
            <input type="date" id="start" name="trip-start" value="2035-07-22" min="2018-01-01" max="2035-12-31" />
        </div>
        <div class="post-it animate__animated animate__fadeIn">
            <h3>This is a third post-it</h3>
            <p>Quisque scelerisque semper.</p>
            <div class="close-icon">&times;</div>
            <label for="start"></label>
            <input type="date" id="start" name="trip-start" value="2035-07-22" min="2018-01-01" max="2035-12-31" />
        </div>
    </div>
</body>
</html>