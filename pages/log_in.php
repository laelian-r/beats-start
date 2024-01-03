<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beats Start · Connexion</title>
    <meta name="description" content="Connexion Beats-Start">
    <link rel="stylesheet" href="./logs.css">

    <!-- FONT AWESOME -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>
<body>
    <header>

        <a href="../index.html" class="logo"><img src="../assets/img/signature.png" class="logo" alt="logo"></a>

        <nav>
          <ul>
              <li><a href="../index.html">Accueil</a></li>
              <li><a href="#">Favorits</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Messages</a></li>
              
              <input type="search" id="search" name="search" placeholder="Rechercher">
              
              <li><a href="#" class="logs-active">Connexion</a></li>
              <li><a href="./regestration.php" class="logs">Inscription</a></li>
          </ul>
      </nav>

      <img src="../assets/icons/bars-solid.svg" alt="Menu" id="menu" class="menu">

    </header>

    <main>

      <div class="boxAlert" id="boxAlert">
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $username = $_POST['username'];
              $password = $_POST['password'];

              if (empty($username) || empty($password)) {
                  echo '<p class="message">Veuillez remplir tous les champs du formulaire.</p>';
              } else {
                  // Tous les champs sont remplis, vous pouvez effectuer d'autres actions ici
                  // Par exemple, traiter les données du formulaire
                  // Par souci de sécurité, assurez-vous de valider et de traiter correctement ces données avant de les utiliser dans votre application
              }
          }
        ?>
      </div>

      <div class="container">
        <form action="" method="post">
          <h2>Connexion</h2>

          <label for="username">username</label>
          <input type="text" name="username" id="username" placeholder="Nom d'artiste" require>
          
          <label for="password">password</label>
          <input type="password" name="password" id="password" placeholder="Mot de passe" require>
          
          <a href="" class="test">Mot de passe oublié</a>

          <button>Se connecter</button>
          
          <a href="./regestration.php" class="sign-in">S'inscrire</a>
        </form>
      </div>
    </main>

    <footer>
    </footer>

    <script src="../main.js" type="module"></script>
</body>
</html>