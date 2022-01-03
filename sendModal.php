<?php

# On déclare que notre fichier va renvoyer du JSON
header('Content-type:application/json');

function phoneNumber($phoneNumber)
{
    //Supprimer tous les caractères qui ne sont pas des chiffres
    $phoneNumber = preg_replace('/[^0-9]+/', '', $phoneNumber);
    return $phoneNumber;
}

# Post de modal côté desktop
if (!empty($_POST['modalNom']) && !empty($_POST['modalNumero'])) {
    $numero = phoneNumber($_POST['modalNumero']);
    $nom = $_POST['modalNom'];

    if (strlen($numero) != 10) {
        echo json_encode([
            'success' => 'failed'
        ]);
    } else {
        $to = 'gadella.erpi@hotmail.fr';
        $sujet = 'Rappeler ' . $nom;
        $msg = 'Nouveau message depuis le site ent-erpi.fr' . "\r\n\r\n";
        $msg .= 'Bonjour,' . "\r\n\r\n";
        $msg .= 'Merci de bien vouloir me rappeler ' . "\r\n\r\n";
        $msg .= 'Nom : ' . $nom . "\r\n\r\n";
        $msg .= 'Numéro : ' . $numero . "\r\n";
        $headers = array(
            'From' => 'webmaster@erpi.fr',
            'X-Mailer' => 'PHP/' . phpversion()
        );
        mail($to, $sujet, $msg, $headers);

        echo json_encode([
            'success' => 'success',
        ]);
    }
} else {
    echo json_encode([
        'success' => 'failed'
    ]);
}
