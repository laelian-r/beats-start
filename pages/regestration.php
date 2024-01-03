<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beats Start · Inscription</title>
    <meta name="description" content="Inscription Beats-Start">
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
              
              <li><a href="./log_in.php" class="logs-active">Connexion</a></li>
              <li><a href="#" class="logs">Inscription</a></li>
          </ul>
      </nav>

      <img src="../assets/icons/bars-solid.svg" alt="Menu" id="menu" class="menu">

    </header>

    <main>

      <div class="boxAlert" id="boxAlert">
        <?php
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $username = $_POST['username'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $password = $_POST['password'];
              $cpassword = $_POST['cpassword'];

              if (empty($username) || empty($email) || empty($phone) || empty($password) || empty($cpassword)) {
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
          <h2>Inscription</h2>

          <label for="username">username</label>
          <input type="text" name="username" id="username" placeholder="Nom d'artiste" require>
          
          <label for="email">email</label>
          <input type="email" name="email" id="email" placeholder="Adresse email" require>

          <label for="phone">phone</label>
          <input type="number" name="phone" id="phone" placeholder="Numéro de téléphone" require>
          
          <label for="password">password</label>
          <input type="password" name="password" id="password" placeholder="Mot de passe" require>

          <label for="cpassword">cpassword</label>
          <input type="password" name="cpassword" id="cpassword" placeholder="Répéter le mot de passe" require>

          <button id="btn">Suivant</button>
          
          <a href="./log_in.php" class="log-in">Se connecter</a>
        </form>
      </div>
    </main>

    <footer>
    </footer>

    <script src="../main.js" type="module"></script>
</body>
</html>