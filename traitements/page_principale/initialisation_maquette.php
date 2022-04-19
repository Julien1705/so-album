<?php

// ----------------------------------------------------------------------
// Connexion à la base de données
// ----------------------------------------------------------------------

include '../connexion_bdd.php';

// ----------------------------------------------------------------------
// Initialisation des variables de sortie de la procédure
// ----------------------------------------------------------------------

$nbPages = $_GET['nbPages'];
$nbZones = $_GET['nbZones'];

$select                     = [];
$select["CODE_RETOUR"]      = '';
$select["MESSAGE_RETOUR"]   = '';
$select["MESSAGE_SQL"]      = '';

// ----------------------------------------------------------------------
// Préparation de la requêtes SQL
// ----------------------------------------------------------------------

if ($nbZones == 0) {
    $query = "SELECT `CD_MAQUETTE` FROM `maquettes_psd` WHERE `NB_PAGES` = $nbPages";

    try {
        $stmt = $dbh->prepare($query);
        $stmt->execute();

        $code = "";
        while ($row = $stmt->fetch()) {
            $code .= "<div class='col-6 mb-2'>
                <div class='border rounded maquette' id='$row[0]'><img class='border rounded img_maquette' src='../ressources/maquettes/jpg/$row[0].jpg'></div>
            </div>";
        }
    } catch (PDOException $e) {
        $select["CODE_RETOUR"] = 'ERREUR';
        $select["MESSAGE_SQL"] = 'ERREUR DE TRAITEMENT : ' . $query;
    } finally {
        if ($select["CODE_RETOUR"] != 'ERREUR') {
            $select["CODE_RETOUR"]      = 'OK';
            $select["HTML"]             = $code;
        }
    }
}else{
    $query = "SELECT `CD_MAQUETTE` FROM `maquettes_psd` WHERE `NB_PAGES` = $nbPages AND `NB_ZONES`=$nbZones";

    try {
        $stmt = $dbh->prepare($query);
        $stmt->execute();

        $code = "";
        while ($row = $stmt->fetch()) {
            $code .= "<div class='col-6 mb-2'>
                <div class='border rounded maquette' id='$row[0]'><img class='border rounded img_maquette' src='../ressources/maquettes/jpg/$row[0].jpg'></div>
            </div>";
        }
    } catch (PDOException $e) {
        $select["CODE_RETOUR"] = 'ERREUR';
        $select["MESSAGE_SQL"] = 'ERREUR DE TRAITEMENT : ' . $query;
    } finally {
        if ($select["CODE_RETOUR"] != 'ERREUR') {
            $select["CODE_RETOUR"]      = 'OK';
            $select["HTML"]             = $code;
        }
    }
}


// ------------------------------------------------------------------------------------------------------------------------------
// FIN DU TRAITEMENT
// ------------------------------------------------------------------------------------------------------------------------------

echo json_encode($select);
exit(0);
