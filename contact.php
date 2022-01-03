<?php

// On définit si l'utilisateur est sur desktop ou sur phone
$ua = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/iphone/i', $ua) || preg_match('/android/i', $ua) || preg_match('/blackberry/i', $ua) || preg_match('/symb/i', $ua) || preg_match('/ipad/i', $ua) || preg_match('/ipod/i', $ua) || preg_match('/phone/i', $ua)) {
    $user = 'phone';
} else {
    $user = 'desktop';
}

include 'assets/inc/head.inc.php';

?>

<!-- STYLE CSS CONTACT -->
<link rel="stylesheet" href="assets/css/style.contact.css">

<title>SARL E.R.P.I | Contact</title>
<meta name="description" content="Contactez notre société par téléphone ou par mail, ou laissez-nous un message pour convenier d'un rendez-vous, d'une demande de devis ou pour toute autre demande" />

</head>

<body class="d-flex flex-column h-100">
    <?php include 'assets/inc/nav.inc.php'; ?>


    <!-- Modal -->
    <div class="modal fade" id="my_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <form class="modal-content formRappel"  method="post" novalidate>

                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel">Me rappeler</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> <!-- Fin div.modal-header -->

                <div class="modal-body">
                    <input type="text" class="form-control" name="nom" id="nom_sms" placeholder="Nom/Société">
                    <input type="text" class="form-control" name="numero" id="numero_sms" placeholder="Votre numéro de téléphone">
                </div> <!-- Fin div.modal-body -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Annuler</button>
                    <?php
                    // Si l'utilisateur est sur phone, le bouton pour envoyer un sms s'affiche
                    if ($user == 'phone') {
                    ?>
                        <a href="#" class="btn btn-light btn-sm disabled"  id="envoyer_sms">Envoyer</a>
                    <?php
                        // Si l'utilisateur est sur desktop, le bouton pour envoyer un mail s'affiche
                    } else {
                    ?>
                        <input type="submit" class="btn btn-warning btn-sm" name="envoyer" value="Envoyer" id="envoyer">
                    <?php } ?>
                </div> <!-- Fin div.modal-footer -->

            </form>
        </div> <!-- Fin div.modal-dialog -->
    </div> <!-- Fin div.modal.fade -->
    <!-- Fin Modal -->


    <section>
        <div class="container container-contact">

            <div class="row justify-content-between contact">

                <div class="col-md-6 col-12 coordonnees">
                    <h3>Nos coordonnées</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> 43 boulevard Auguste Blanqui 75013 Paris</li>
                        <li><a href="tel:+33160118309"><i class="fas fa-home"></i> 01.60.11.83.09</a></li>
                        <li><a href="tel:+33660275304"><i class="fas fa-phone"></i> 06.60.27.53.04</a></li>
                        <li><a href="mailto:gadella.erpi@hotmail.fr"><i class="fas fa-envelope"></i> gadella.erpi@hotmail.fr</a></li>
                        <li><button class="btn btn-sm" data-toggle="modal" data-target="#my_modal">Me rappeler</button></li>
                    </ul>
                </div><!-- Fin div.col-md-6.col-12.coordonnees -->

                <div class="col-md-6 col-12 message">
                    <h3>Laissez nous un message</h3>
                    <form class="formulaire" method="post" novalidate>
                        <div class="form-group">
                            <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom / Société" name="nomForm">
                        </div> <!-- Fin div.form-group -->
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" placeholder="Entrez votre adresse email" name="emailForm">
                        </div> <!-- Fin div.form-group -->
                        <div class="form-group">
                            <textarea class="form-control" id="messageForm" rows="6" name="messageForm" placeholder="Votre message..."></textarea>
                        </div> <!-- Fin div.form-group -->
                        <div class="form-group">
                            <input id="envoi" type="submit" value="Envoyer votre message">
                        </div> <!-- Fin div.form-group -->
                    </form>
                </div> <!-- Fin div.col-md-6.col-12.message -->

            </div> <!-- Fin div.row.justify-content-between.contact -->

        </div> <!-- Fin div.container.container-contact -->

        <?php include 'assets/inc/footer.inc.php'; ?>