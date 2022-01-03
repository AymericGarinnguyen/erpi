<?php

// Fonction pour choisir le dossier du carousel actif
function carousel($dossier)
{
    $images = array_slice(scandir('assets/img/carousel/' . $dossier), 2);
    $i = 0;
    foreach ($images as $image) {
?>
        <div class="carousel-item <?php if ($i == 0) {
                                        echo 'active';
                                    } ?>">
            <img src="assets/img/carousel/<?= $dossier ?>/<?= $image; ?>" class="d-block w-100" alt="...">
        </div> <!-- Fin div.carousel-item -->
<?php $i++;
    }
};

include 'assets/inc/head.inc.php';

?>

<!-- STYLE CSS COMPETENCES -->
<link rel="stylesheet" href="assets/css/style.competences.css">

<title>SARL E.R.P.I | Nos compétences</title>
<meta name="description" content="Nos compétences sont nombreuses, maçonnerie, électricité, plomberie, sols, peinture, ravalement, menuiserie" />

</head>

<body class="d-flex flex-column h-100">

    <?php include 'assets/inc/nav.inc.php'; ?>

    <section>
        <div class="container">

            <!-- Si l'écran fait moins de 768px, alors le bouton dropdown apparait -->
            <div class="dropdown">
                <button class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Compétences
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item active" href="maconnerie">Maçonnerie</a>
                    <a class="dropdown-item" href="electricite">Electricité</a>
                    <a class="dropdown-item" href="plomberie">Plomberie</a>
                    <a class="dropdown-item" href="sol">Sol</a>
                    <a class="dropdown-item" href="peinture">Peinture</a>
                    <a class="dropdown-item" href="ravalement">Ravalement</a>
                    <a class="dropdown-item" href="menuiserie">Menuiserie</a>
                </div> <!-- Fin div.dropdown-menu -->
            </div> <!-- Fin div.dropdown -->

            <!-- Si l'écran fait plus de 768px, le menu des compétences apparait -->
            <ul class="competences d-flex justify-content-between flex-wrap p-0 mb-3">
                <li>
                    <a href="maconnerie">
                        <figure id="nb-active">
                            <img src="assets/img/macon.jpg" alt="">
                            <figcaption>Maçonnerie</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="electricite">
                        <figure>
                            <img src="assets/img/electricien.jpg" alt="">
                            <figcaption>Electricité</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="plomberie">
                        <figure>
                            <img src="assets/img/plomberie.jpg" alt="">
                            <figcaption>Plomberie</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="sol">
                        <figure>
                            <img src="assets/img/carrelage.jpg" alt="">
                            <figcaption>Sol</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="peinture">
                        <figure>
                            <img src="assets/img/peintre.jpg" alt="">
                            <figcaption>Peinture</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="ravalement">
                        <figure>
                            <img src="assets/img/ravalement.jpg" alt="">
                            <figcaption>Ravalement</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="menuiserie">
                        <figure>
                            <img src="assets/img/menuiserie.jpg" alt="">
                            <figcaption>Menuiserie</figcaption>
                        </figure>
                    </a>
                </li>
            </ul>


            <!--  **** Blocks des définitions **** -->

            <!-- Block maçonnerie -->
            <div class="row m-0 definitions" id="maconnerie">
                <!-- Carousel -->
                <div class="col-md-3 col-12 order-md-1 order-2 mr-md-4 photo">
                    <div id="carouselMaconnerie" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php carousel('maconnerie'); ?>
                        </div> <!-- Fin div.carousel-inner -->
                    </div> <!-- Fin div.carousel.slide -->
                </div> <!-- Fin div.col-md-3.col-12.order-md-1.order-2.mr-md-4.photo -->

                <!-- Définitions des compétences -->
                <div class="col-md-6 col-12 order-md-2 order-1 ml-md-4 corps">
                    <h2>Maçonnerie</h2>
                    <ul>
                        <li>Travaux d'agrandissement, de renforcement, d'extension, de surélévation.</li>
                        <li>Création de chapes et de dalles.</li>
                        <li>Plâterie, cloisons en placostyle, faux plafonds.</li>
                        <li>Aménagement extérieur, terrasses, descentes de garage, pavage, clôtures, murets.</li>
                    </ul>
                </div> <!-- Fin div.col-md-6.col-12.order-md-2.order-1.ml-md-4.corps -->

                <!-- Dessin de représentation -->
                <div class="bonhomme">
                    <img src="assets/img/bon_macon.png" alt="Dessin 3D d'un bonhomme blanc représentant les travaux de la maçonnerie">
                </div> <!-- Fin div.bonhomme -->
            </div> <!-- Fin div.row.m-0.definitions -->


            <!-- Block électricité -->
            <div class="row m-0 definitions" id="electricite">
                <!-- Carousel -->
                <div class="col-md-3 col-12 order-md-1 order-2 mr-md-4 photo">
                    <div id="carouselElectricite" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php carousel('electricite'); ?>
                        </div> <!-- Fin div.carousel-inner -->
                    </div> <!-- Fin div.carousel.slide -->
                </div> <!-- Fin div.col-md-3.col-12.order-md-1.order-2.mr-md-4.photo -->

                <!-- Définitions des compétences -->
                <div class="col-md-6 col-12 order-md-2 order-1 ml-md-4 corps">
                    <h2>Electricité</h2>
                    <ul>
                        <li>Installation neuve.</li>
                        <li>Rénovation électrique avec mise aux normes.</li>
                        <li>Rénovation électrique avec simple mise en sécurité des installations électriques.</li>
                        <li>Installation de chauffage électrique (radiateurs électriques, sèche-serviette, etc.).</li>
                        <li>Conception et pose de tableau électrique.</li>
                        <li>Installation d'accessoires électriques (prise de courant, luminaires, interrupteurs, etc.).</li>
                    </ul>
                </div> <!-- Fin div.col-md-6.col-12.order-md-2.order-1.ml-md-4.corps -->

                <!-- Dessin de représentation -->
                <div class="bonhomme">
                    <img src="assets/img/bon_electricien.png" alt="Dessin 3D d'un bonhomme blanc représentant les travaux de l'électricité">
                </div> <!-- Fin div.bonhomme -->
            </div> <!-- Fin div.row.m-0.definitions -->


            <!-- Block plomberie -->
            <div class="row m-0 definitions" id="plomberie">
                <!-- Carousel -->
                <div class="col-md-3 col-12 order-md-1 order-2 mr-md-4 photo">
                    <div id="carouselPlmoberie" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php carousel('plomberie'); ?>
                        </div> <!-- Fin div.carousel-inner -->
                    </div> <!-- Fin div.carousel.slide -->
                </div> <!-- Fin div.col-md-3.col-12.order-md-1.order-2.mr-md-4.photo -->

                <!-- Définitions des compétences -->
                <div class="col-md-6 col-12 order-md-2 order-1 ml-md-4 corps">
                    <h2>Plomberie</h2>
                    <ul>
                        <li>Création de salle de bains.</li>
                        <li>Pose de baignoires, de douche, de douche à l'italienne, WC, lavabo.</li>
                        <li>Pose d'évier.</li>
                        <li>Pose de faïence murale.</li>
                    </ul>
                </div> <!-- Fin div.col-md-6.col-12.order-md-2.order-1.ml-md-4.corps -->

                <!-- Dessin de représentation -->
                <div class="bonhomme">
                    <img src="assets/img/bon_plomberie.png" alt="Dessin 3D d'un bonhomme blanc représentant les travaux de la plomberie">
                </div> <!-- Fin div.bonhomme -->
            </div> <!-- Fin div.row.m-0.definitions -->


            <!-- Block sols -->
            <div class="row m-0 definitions" id="sol">
                <!-- Carousel -->
                <div class="col-md-3 col-12 order-md-1 order-2 mr-md-4 photo">
                    <div id="carouselSol" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php carousel('sol'); ?>
                        </div> <!-- Fin div.carousel-inner -->
                    </div> <!-- Fin div.carousel.slide -->
                </div> <!-- Fin div.col-md-3.col-12.order-md-1.order-2.mr-md-4.photo -->

                <!-- Définitions des compétences -->
                <div class="col-md-6 col-12 order-md-2 order-1 ml-md-4 corps">
                    <h2>Revêtement de sol</h2>
                    <ul>
                        <li>Pose de carrelage céramique.</li>
                        <li>Pose de moquette en rouleaux ou en dalles.</li>
                        <li>Peinture au sol.</li>
                        <li>Ponçage et vitrification de parquets.</li>
                        <li>Pose de dalles en vinyle.</li>
                        <li>Réfection d'escalier en dalles.</li>
                    </ul>
                </div> <!-- Fin div.col-md-6.col-12.order-md-2.order-1.ml-md-4.corps -->

                <!-- Dessin de représentation -->
                <div class="bonhomme">
                    <img src="assets/img/bon_sol.png" alt="Dessin 3D d'un bonhomme blanc représentant les travaux du sol">
                </div> <!-- Fin div.bonhomme -->
            </div> <!-- Fin div.row.m-0.definitions -->


            <!-- Block peinture -->
            <div class="row m-0 definitions" id="peinture">
                <!-- Carousel -->
                <div class="col-md-3 col-12 order-md-1 order-2 mr-md-4 photo">
                    <div id="carouselPeinture" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php carousel('peinture'); ?>
                        </div> <!-- Fin div.carousel-inner -->
                    </div> <!-- Fin div.carousel.slide -->
                </div> <!-- Fin div.col-md-3.col-12.order-md-1.order-2.mr-md-4.photo -->

                <!-- Définitions des compétences -->
                <div class="col-md-6 col-12 order-md-2 order-1 ml-md-4 corps">
                    <h2>Peinture</h2>
                    <ul>
                        <li>Réfection en peinture (toutes qualités) et/ou papiers peints des logements.</li>
                        <li>Réfection en peinture des cages d'escalier.</li>
                        <li>Pose de toile de verre avec ou sans enduit</li>
                        <li>Travail peinture de décoration</li>
                    </ul>
                </div> <!-- Fin div.col-md-6.col-12.order-md-2.order-1.ml-md-4.corps -->

                <!-- Dessin de représentation -->
                <div class="bonhomme">
                    <img src="assets/img/bon_peinture.png" alt="Dessin 3D d'un bonhomme blanc représentant les travaux de la peinture">
                </div> <!-- Fin div.bonhomme -->
            </div> <!-- Fin div.row.m-0.definitions -->


            <!-- Block ravalement -->
            <div class="row m-0 definitions" id="ravalement">
                <!-- Carousel -->
                <div class="col-md-3 col-12 order-md-1 order-2 mr-md-4 photo">
                    <div id="carouselRavalement" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php carousel('ravalement'); ?>
                        </div> <!-- Fin div.carousel-inner -->
                    </div> <!-- Fin div.carousel.slide -->
                </div> <!-- Fin div.col-md-3.col-12.order-md-1.order-2.mr-md-4.photo -->

                <!-- Définitions des compétences -->
                <div class="col-md-6 col-12 order-md-2 order-1 ml-md-4 corps">
                    <h2>Ravalement</h2>
                    <ul>
                        <li>Mise en peinture des façades de pavillons de petits immeubles.</li>
                        <li>Pose d'enduit (monoccouche, lisse, crépi, enduit gratté) de façade.</li>
                        <li>Isolation thermique des façades.</li>
                    </ul>
                </div> <!-- Fin div.col-md-6.col-12.order-md-2.order-1.ml-md-4.corps -->

                <!-- Dessin de représentation -->
                <div class="bonhomme">
                    <img src="assets/img/bon_ravalement.png" alt="Dessin 3D d'un bonhomme blanc représentant les travaux de ravalement">
                </div> <!-- Fin div.bonhomme -->
            </div> <!-- Fin div.row.m-0.definitions -->


            <!-- Block menuiserie -->
            <div class="row m-0 definitions" id="menuiserie">
                <!-- Carousel -->
                <div class="col-md-3 col-12 order-md-1 order-2 mr-md-4 photo">
                    <div id="carouselMenuiserie" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php carousel('menuiserie'); ?>
                        </div> <!-- Fin div.carousel-inner -->
                    </div> <!-- Fin div.carousel.slide -->
                </div> <!-- Fin div.col-md-3.col-12.order-md-1.order-2.mr-md-4.photo -->

                <!-- Définitions des compétences -->
                <div class="col-md-6 col-12 order-md-2 order-1 ml-md-4 corps">
                    <h2>Menuiserie</h2>
                    <ul>
                        <li>Pose de menuiseries intérieures (porte iso planes de chambre, porte avec oculus, etc.).</li>
                        <li>Aménagement de cuisine ou de salle de bains.</li>
                    </ul>
                </div> <!-- Fin div.col-md-6.col-12.order-md-2.order-1.ml-md-4.corps -->

                <!-- Dessin de représentation -->
                <div class="bonhomme">
                    <img src="assets/img/bon_menuisier.png" alt="Dessin 3D d'un bonhomme blanc représentant les travaux de la menuiserie">
                </div> <!-- Fin div.bonhomme -->
            </div> <!-- Fin div.row.m-0.definitions -->

        </div> <!-- Fin div.container -->

        <?php include 'assets/inc/footer.inc.php'; ?>