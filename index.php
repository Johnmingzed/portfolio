<?php
session_start();

if (isset($_SESSION['alert'])) {
    $alert = $_SESSION['alert'];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jonathan PAIN-CHAMMING'S - Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="shadow">
        <h1 class="jpc"><a href="index.php">Jonathan PAIN-CHAMMING'S</a></h1>
        <ul class="navbar">
            <li>
                <h2 class="deco"><a href="#about" class="clr-light">À propos</a></h2>
            </li>
            <li>
                <h2 class="deco"><a href="#skills" class="clr-light">Compétences</a></h2>
            </li>
            <li>
                <h2 class="deco"><a href="#soft_skills" class="clr-light">Soft Skills</a></h2>
            </li>
            <li>
                <h2 class="deco"><a href="#projects" class="clr-light">Projets</a></h2>
            </li>
            <li>
                <h2 class="deco"><a href="#contact">Contact</a></h2>
            </li>
        </ul>
        <h1 class="dev deco clr-title">Développeur Full Stack</h1>
    </header>
    <main>
        <section id="about">
            <div class="card-info">
                <h2>à propos</h2>
                <p>J’élabore du code avec <strong>astuce, rigueur et sensibilité esthétique</strong> pour créer des
                    projets web et
                    logiciels audacieux dans un esprit de collaboration.</p>
            </div>
            <div class="portrait shadow">
                <img src="css/images/jonathan.jpg" alt="Portrait de Jonathan PAIN-CHAMMING">
            </div>
            <div class="qualifications shadow">
                <h2>Qualifications</h2>
                <table>
                    <tr>
                        <th>2023</th>
                        <td>Concepteur Développeur d’Applications<br><span class="petit">(Titre Professionnel RNCP6 - en
                                cours)</span></td>
                    </tr>
                    <tr>
                        <th>2017</th>
                        <td>
                            Sécurité des Spectacles</td>
                    </tr>
                    <tr>
                        <th>2012</th>
                        <td>
                            Sécurité incendie (SSIAP1-STT)</td>
                    </tr>
                    <tr>
                        <th>2005</th>
                        <td>
                            Agent Technique du Spectacle</td>
                    </tr>
                    <tr>
                        <th>2001</th>
                        <td>
                            BTS Communication Visuelle</td>
                    </tr>
                    <tr>
                        <th>1999</th>
                        <td>
                            BAC STI Génie Électrotechnique</td>
                    </tr>
                </table>
            </div>
        </section>
        <section id="skills">
            <div class="card relief">
                <h2>Compétences</h2>
                <ul>
                    <li>Maquettage fonctionnel et graphique</li>
                    <li>Développement front-end et back-end</li>
                    <li>Intégration web statique et dynamique</li>
                    <li>Développement de bases de données</li>
                    <li>Design graphique et UI</li>
                    <li>Maîtrise de la chaîne de production print</li>
                </ul>
            </div>
            <div class="infos shadow">
                <p>Enthousiaste à l'idée de relever les <strong>défis techniques les plus ambitieux,</strong> je mets ma
                    force de travail et mon goût de l’excellence au service de la réalisation de vos projets web et
                    logiciels.</p>
                <p>Je travaille avec <strong>astuce, réactivité et méthode,</strong> et saurai m’intégrer au sein d’une
                    équipe, dans le respect de ses pratiques en ayant à cœur de produire un <strong>code efficace et
                        maintenable.</strong></p>
            </div>
            <div class="tech right relief">
                <h2>Technos</h2>
                <ul>
                    <li>PHP</li>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JS</li>
                    <li>React</li>
                    <li>Python</li>
                    <li>Sass</li>
                    <li>MySQL</li>
                    <li>Bash</li>
                    <li>GIT</li>
                    <li>Bootstrap</li>
                    <li>DMX</li>
                    <li>C++</li>
                    <li>&nbsp;</li>
                    <li class="clr-light">Windows</li>
                    <li class="clr-light">Linux</li>
                    <li class="clr-light">Android</li>
                </ul>
            </div>
            <div class="tech left relief">
                <h2>Logiciels</h2>
                <ul>
                    <li>Photoshop</li>
                    <li>InDesgin</li>
                    <li>Illustrator</li>
                    <li>Figma</li>
                    <li>VS Code</li>
                    <li>Visual Studio</li>
                    <li>FileZilla</li>
                    <li>WordPress</li>
                    <li>GitHub</li>
                    <li>&nbsp;</li>
                    <li class="clr-light">QLC+</li>
                    <li class="clr-light">Cubase</li>
                    <li class="clr-light">Audacity</li>
                    <li class="clr-light">Vegas</li>
                    <li class="clr-light">Suite Office</li>
                    <li class="clr-light">Midjourney</li>
                    <li class="clr-light">ChatGPT</li>
                </ul>
            </div>
        </section>
        <section id="soft_skills">
            <div class="infos shadow">
                <p>Parce qu’<strong>ensemble on va plus loin,</strong> j’ai plaisir à partager mes savoirs
                    et apprendre des autres. Je m'efforce à stimuler une relation de <strong>confiance, volontaire et
                        altruiste.</strong>
                </p>
                <p>Mon expérience du milieu des arts et du spectacle vivant me pousse à porter une attention toute
                    particulère
                    à <strong>l’esthétique et au sens donné à mes productions.</strong></p>
            </div>
            <div class="card relief">
                <h2>Soft skills</h2>
                <ul>
                    <li>Travail en équipe et esprit d'inclusivité</li>
                    <li>Transmission, pédagogie, accessibilité</li>
                    <li>Méthodes agiles</li>
                    <li>Documentation autonome et formation continue</li>
                    <li>Veille technologique et réglementaire</li>
                    <li>Raisonnement logique et rigueur</li>
                    <li>Esprit d’initiative et force de proposition</li>
                    <li>Sensibilité eshtétique et artistique</li>
                    <li>Réalisation vidéos, FX et animations 2D</li>
                    <li>Sound design, composition, enregistrement et mixage son</li>
                    <li>Réalisation d’installations lumières</li>
                </ul>
            </div>
        </section>
        <section id="projects">
            <h2 class="rubrique shadow">Projets</h2>
            <div class="projet relief">
                <h3>Oscillo Théâtroscope</h3>
                <div class="preview">
                    <a href="https://www.oscillo-theatroscope.com" target="_blank"><img src="css/images/oscillo.png"
                            alt="Apperçu du site de l'Oscillo Théâtroscope"></a>
                </div>
                <div class="synopsis">
                    Site web dynamique pour une salle de spectacle incluant un agenda et le back-office nécessaire à sa
                    gestion.
                </div>
            </div>
            <div class="projet shadow">
                <h3>J&D Odyssey</h3>
                <div class="wip">
                    <img src="css/images/affiche Odyssey non datée.jpg" alt="Affiche du spectacle J&D Odyssey">
                </div>
                <div class="synopsis">
                    Conception, réalisation et automatisation d'une régie de spectacle multimedia. </div>
            </div>
            <div class="projet shadow">
                <h3>4k or Not <span class="clr-light petit">work in progress</span></h3>
                <div class="wip">
                    <img src="css/images/4k.jpg" alt="Image 4K">
                </div>
                <div class="synopsis">
                    Application d'aide au choix d'une résolution d'un écran en fonction de sa distance de visionnage.
                </div>
            </div>
            <div class="projet relief">
                <h3>Jonathan&David</h3>
                <div class="preview">
                    <a href="http://www.jonathanetdavid.com" target="_blank"><img src="css/images/jonathanetdavid.png"
                            alt="Apperçu du site de Jonathan&David"></a>
                </div>
                <div class="synopsis">
                    Site vitrine one-page avec intégration d'API Facebook, Soundcloud et une bannière
                    saisonnière.
                </div>
            </div>
        </section>
        <section id="contact">
            <h2 class="rubrique shadow">Contact</h2>
            <form action="sendmail.php" method="post" class="shadow">
                <fieldset class="form-message">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                </fieldset>
                <fieldset class="form-firtname">
                    <label for="firstname">Prénom</label>
                    <input type="text" name="firstname" id="firstname" required>
                </fieldset>
                <fieldset class="form-lastname">
                    <label for="lastname">Nom </label>
                    <input type="text" name="lastname" id="lastname" required>
                </fieldset>
                <fieldset class="form-mail">
                    <label for="mail">Email </label>
                    <input type="email" name="mail" id="mail" required>
                </fieldset>
                <fieldset class="form-submit">
                    <input type="submit" value="ENVOYER">
                </fieldset>
            </form>
            <?php
            if (isset($alert)): ?>
                <div id="sys_message" class="sys_message relief <?php echo $alert['css']; ?>">
                    <?php echo $alert['msg']; ?>
                </div>
                <?php session_destroy(); endif; ?>
        </section>
    </main>
    <footer>
        <h2><a href="#" class="clr-light">Mentions Légales</a></h2>
        <a href="files/CV Jonathan PAIN-CHAMMING'S (2023).pdf" target="_blank" class="center">Télécharger mon CV</a>
        <ul class="social">
            <li><a href="https://github.com/Johnmingzed" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                    </svg></a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/jonathan-pain-chamming-s-8628b4238/" target="_blank"><svg
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                    </svg></a>
            </li>
        </ul>
    </footer>
</body>

</html>