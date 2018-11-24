<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Mon CV</title>
</head>
    <header>
            <div id="btn">
                    <div id='top'></div>
                    <div id='middle'></div>
                    <div id='bottom'></div>
            </div>
            <div id="box">
                    <div id="items">
                            <div class="item"><a href="#about">Accueil</a></div>
                            <div class="item"><a href="#experiences">Experiences</a></div>
                            <div class="item"><a href="#formations">Formations</a></div>
                            <div class="item"><a href="#loisirs">Loisirs</a></div>
                            <div class="item"><a href="#formulaire">Contact</a></div>
                    </div>
            </div>
        <div id="about">
            <div class="imageRonde">
                <img class="avatar1" alt="photo avatar" src="img/Moi.jpg"> 
            </div> 
            <h1>Jean-Philippe GRASSE</h1>
            <h3>Developpeur Web</h3>
        </div>
    </header>
<body>
    <section id="experiences">
        <div class="containerXp">
            <div class="titreXp">
                <h2>Experiences Professionnelles</h2>
            </div>
            <div class="timeline">
                <div class="container left">
                    <div class="contenu">
                        <h2>Assistant Manager</h2>
                        <p class="date"><i class="far fa-calendar-check"></i>Juillet 2013 - Septembre 2018</p>
                        <p class="lieu"><i class="fas fa-map-marker-alt"></i>Patàpain Saint-Doulchard</p>
                        <p class="acte">Ouverture et fermeture du restaurant</p>
                        <p class="acte">Comptage de caisses, travail administratif</p>
                        <p class="acte">Gestion des stocks</p>
                        <p class="acte">Preparation fraiches et surgelées</p>
                        <p class="acte">Management d'équipe</p>
                    </div>
                </div>
                <div class="container right">
                    <div class="contenu">
                        <h2>Agent d'accueil</h2>
                        <p class="date"><i class="far fa-calendar-check"></i>Février 2013 - Avril 2013</p>
                        <p class="lieu"><i class="fas fa-map-marker-alt"></i>CGR Bourges</p>
                        <p class="acte">Encaissement</p>
                        <p class="acte">Comptage de caisses</p>
                        <p class="acte">Gestion des rayons</p>
                    </div>
                </div>
                <div class="container left">
                    <div class="contenu">
                        <h2>Agent de production</h2>
                        <p class="date"><i class="far fa-calendar-check"></i>Mars 2007 - Mars 2012</p>
                        <p class="lieu"><i class="fas fa-map-marker-alt"></i>Manka Créations</p>
                        <p class="acte">Travail sur ligne de production seul ou en équipe</p>
                        <p class="acte">Remplacement du cariste</p>
                        <p class="acte">Assister le technicien de maintenance</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="formations">
        <div class="formationTitre">
            <h2>Formations</h2>
        </div>
        <div class="containerFormation">
            <div class="contGauche">
                <h4>2005</h4>
                <div class="trait1"></div>
                <i class="fas fa-graduation-cap"></i>
                <h3>Lycée Général et Technologique Charles Jully</h3>
                <p class="lieuForm">Saint-Avold (57500)</p>
                <p>Niveau Bac STI Génie Electronique</p>
            </div>
            <div class="contCentre">
                <h4>2017</h4>
                <div class="trait1"></div>
                <i class="fas fa-medkit"></i>
                <h3>Formation aux premiers secours PSC1</h3>
                <p class="lieuForm">Bourges (18000)</p>
            </div>
            <div class="contDroite">
                <h4>2018</h4>
                <div class="trait1"></div>
                <i class="fas fa-laptop-code"></i>
                <h3>Formation Titre Professionel Developpeur Web / Web Mobile Niveau III</h3>
                <p class="lieuForm">AFORMAC Bourges (18000)</p>
            </div>
        </div>
    </section>
    <section class="competences">

    </section>
    <section id="loisirs">
        <div class="titreLoisirs">
            <h2>Loisirs - Centre d'interet<h2>
        </div>
        <div class="containerloisirs">
            <div class="containerImg">
                <img class="imageLoisir" src="img/icons8-game-boy-visuelle-144.png" alt="un gameboy advance">
                <div class="overlay">
                    <div class="text">jeux vidéo</div>
                </div>
            </div>
            <div class="containerImg">
                <img class="imageLoisir" src="img/icons8-r2-d2-144.png" alt="un clapperboard de cinéma">
                <div class="overlay">
                    <div class="text">science-fiction</div>
                </div>
            </div>
            <div class="containerImg">
                <img class="imageLoisir" src="img/icons8-émission-de-télévision-96.png" alt="une tv">
                <div class="overlay">
                    <div class="text">série tv / cinéma</div>
                </div>
            </div>
            <div class="containerImg">
                <img class="imageLoisir" src="img/icons8-poste-de-travail-96.png" alt="un pc">
                <div class="overlay">
                    <div class="text">informatique</div>
                </div>
            </div>
        </div>
    </section>
    <section id="formulaire">
        <div class="formulaireTitre">
            <h2>Me contacter</h2>
        </div>
        <form class="form" method="post" action="cible.php">
            <div class="champForm">
                <div class="nomPrenom">
                    <input type="text" name="nom" class="nom" id="nom" placeholder="Nom"></p>
                    <input type="text" name="prenom" class="prenom" id="prenom" placeholder="Prenom"></p>
                </div>
                <div class="mail">
                    <input type="text" name="email" class="email" placeholder="email"></p>
                </div>
                <div class="mess">
                    <textarea class="message" id="msg" name="message" placeholder="Votre message !"></textarea>
                </div>
            </div>
            <input type="submit" class="envoyer" value="Envoyer">
        </form>
       

    </section>
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</body>
<footer>

</footer>
</html>