<?php

// ----------------------------------------------------------------------
// Connexion à la base de données
// ----------------------------------------------------------------------

include '../connexion_bdd.php';

// ----------------------------------------------------------------------
// Initialisation des variables de sortie de la procédure
// ----------------------------------------------------------------------

$select                     = [];
$select["CODE_RETOUR"]      = '';
$select["MESSAGE_RETOUR"]   = '';
$select["MESSAGE_SQL"]      = '';
    
// ----------------------------------------------------------------------
// Préparation de la requêtes SQL
// ----------------------------------------------------------------------

$query = "SELECT DISTINCT `NB_ZONES` FROM `maquettes_psd` ORDER BY `NB_ZONES` ASC";

try {
    $stmt = $dbh->prepare($query);
    $stmt->execute();

    $code = "<option value='0'>Nombre de photos</option>";
    while ($row = $stmt->fetch())
    {
        $code .= "<option value="  . $row[0] . ">" . $row[0] . "</option>";      
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

// ------------------------------------------------------------------------------------------------------------------------------
// FIN DU TRAITEMENT
// ------------------------------------------------------------------------------------------------------------------------------

echo json_encode($select);
exit(0);
?>
