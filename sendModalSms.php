<?php

# On déclare que notre fichier va renvoyer du JSON
header('Content-type:application/json');

function phoneNumber($phoneNumber)
{
    //Supprimer tous les caractères qui ne sont pas des chiffres
    $phoneNumber = preg_replace('/[^0-9]+/', '', $phoneNumber);
    return $phoneNumber;
}

# Post de modal côté phone
if (!empty($_POST['modalNom']) && !empty($_POST['modalNumero'])) {
    $numero = phoneNumber($_POST['modalNumero']);
    $nom = $_POST['modalNom'];

    if (strlen($numero) != 10) {
        echo json_encode([
            'success' => 'failed',
            'errors' => 'Le numero doit comporter 10 chiffres !'
        ]);
    } else {
        echo json_encode([
            'success' => 'success',
        ]);
    }
} else {
    echo json_encode([
        'success' => 'failed',
        'errors' => 'Vous devez remplir les deux champs'
    ]);
}