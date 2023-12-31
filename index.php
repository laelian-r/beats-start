<!DOCTYPE html>
<html lang="fr-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beats Start</title>
    <meta name="description" content="description">
    <link rel="stylesheet" href="./assets/css/style.css">

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

        <a href="/" class="logo"><img src="./assets/img/signature.png" height="130px" alt="logo"></a>

        <nav>
          <ul>
              <li><a href="#" class="active">Accueil</a></li>
              <li><a href="#">Favorits</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Messages</a></li>
              
              <input type="search" id="search" name="search" placeholder="Rechercher">
              
              <li><a href="./pages/log_in.php" class="logs">Connexion</a></li>
              <li><a href="./pages/regestration.php" class="logs">Inscription</a></li>
          </ul>
      </nav>

        <!-- <div id="icons">
          <a href=""><i class="fa-solid fa-bars" id="menu"></i></a>
          <a href=""><i class="fa-solid fa-xmark" id="cross"></i></a>
        </div> -->

    </header>

    <!-- <div id="suggest"></div> -->

    <main>
        <hgroup>
          <h1>Beats Start</h1>

          <p>
              Bienvenue sur Beats Start !<br />
              Beats Start est une plateforme spécialisée dans la mise en relation entre artistes.
              Que vous soyez rappeur, beatmaker, chanteur, musicien, etc... Nous avons ce qu'il vous faut.
              Avec Beats Start, vous pouvez découvrir plusieurs artistes emergents et leurs proposer des colaborations
              pour votre prochaine musique. <br>
              Pour plus d'information cliquez sur le boutton ci-dessous.
          </p>
        </hgroup>

        <a href="#" class="btn">En savoir plus</a>

        <a href="#cards" class="descente">
            <!-- <img src="./assets/icons/arrow-down-solid.svg" alt="cartes"> -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
        </a>

        <!-- <hr> -->

        <!-- <article id="article">
            <img src="./assets/img/Derow.jpg" alt="Image de profile" id="img">
            <header class="article">
                <h2>Derow</h2>
                <h3>Rappeur - Beatmaker</h3>
            </header>

            <main>
                <p>
                    Derow, rappeur et beatmaker âgé de 16 ans. Je compte commencer à composer un album de 10 titres minimum. Le concept de l'album serait une histoire d'amour qui commence par une amitié et qui termine par plusieurs disputes et même une mort. Pour cet album j'aurais besoin de plusieurs featurings. C'est donc pour ça que je fais appelle à ce service.
                </p>
            </main>
        </article> -->

        <!-- Toutes les cartes -->
    
        <section id="cards">
          <article>
            
            <img src="./assets/img/Derow.jpg" alt="Photo de profile" height="300px">
            <h2 id="suggest">Derow</h2>
            <h3>Rappeur</h3>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore assumenda optio corporis suscipit.
            </p>

            <a href="#">
              Voir plus
              <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
              </svg> -->
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          
          </article>

          <article>
            
            <img src="./assets/img/Derow.jpg" alt="Photo de profile" height="300px">
            <h2>V€nus</h2>
            <h3>Rappeur</h3>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore assumenda optio corporis suscipit.
            </p>

            <a href="#">
              Voir plus
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          
          </article>

          <article>
            
            <img src="./assets/img/Derow.jpg" alt="Photo de profile" height="300px">
            <h2>Mellow</h2>
            <h3>Rappeur</h3>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore assumenda optio corporis suscipit.
            </p>

            <a href="#">
              Voir plus
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          
          </article>

          <article>
            
            <img src="./assets/img/Derow.jpg" alt="Photo de profile" height="300px">
            <h2>Damso</h2>
            <h3>Rappeur</h3>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore assumenda optio corporis suscipit.
            </p>

            <a href="#">
              Voir plus
              <i class="fa-solid fa-arrow-right"></i>
            </a>
          
          </article>
        </section>
        
        <!-- Fin de toutes les cartes -->
    </main>

    <footer>
    </footer>

    <script src="./main.js" type="module"></script>
</body>
</html>