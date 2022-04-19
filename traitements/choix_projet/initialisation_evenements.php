<?php

// ----------------------------------------------------------------------
// Initialisation des variables de sortie de la procédure
// ----------------------------------------------------------------------

$numProjet = $_GET['num_projet'];

$select                     = [];
$select["CODE_RETOUR"]      = '';
$select["MESSAGE_RETOUR"]   = '';
    
$code = "<option selected>Votre évènement</option>";

$evenements = '../../view/liste_projets/'. $numProjet .'/ALBUM_PSD';
$dir = opendir($evenements);
while ($file = readdir($dir)) {
    if ($file != '.' && $file != '..' && !is_dir($evenements . $file)) {
        $code .= '<option value=' . $file . '>' . $file . '</option>';
    }
}

$select["HTML"] = $code;

// ------------------------------------------------------------------------------------------------------------------------------
// FIN DU TRAITEMENT
// ------------------------------------------------------------------------------------------------------------------------------

echo json_encode($select);
exit(0);
