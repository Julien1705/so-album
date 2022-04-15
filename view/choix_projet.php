<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix du projet et de l'évènement</title>
    <link rel="stylesheet" href="../css/choix_projet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="choix-page">
        <div class="form">
            <a href="../index.php">
                <span class="iconify" data-width="25" data-height="28" data-icon="ant-design:logout-outlined" data-rotate="270deg"></span>
            </a>

            <form class="choix-form">
                <label for="projet">Choisir votre projet</label>
                <select id="projet">
                    <option selected>Votre projet</option>
                    <?php
                    $projets = './liste_projets';
                    $dir = opendir($projets);
                    while ($file = readdir($dir)) {
                        if ($file != '.' && $file != '..' && !is_dir($projets . $file)) {
                            echo '<option value="" href="' . $projets . '/' . $file . '">' . $file . '</option>' . '<br /><br />';
                        } else {
                            echo 'Aucun projet disponible';
                        }
                    }
                    ?>
                </select>
            </form>

            <form class="choix-form">
                <label for="evenement">Choisir votre évènement</label>
                <select id="evenement">
                    <option selected>Votre évènement</option>
                    <?php
                    $evenements = './liste_projets/2021-9846/ALBUM_PSD';
                    $dir = opendir($evenements);
                    while ($file = readdir($dir)) {
                        if ($file != '.' && $file != '..' && !is_dir($evenements . $file)) {
                            echo '<option value="" href="' . $evenements . '/' . $file . '">' . $file . '</option>' . '<br /><br />';
                        } else {
                            echo 'Aucun évènement disponible';
                        }
                    }
                    ?>
                </select>
            </form>
            <button type="button" id="choix_projet">Continuer</button>
        </div>
    </div>
</body>

</html>

<script>
    const projet = document.querySelector('#projet');
    const evenement = document.querySelector('#evenement');
    const choix_projet = document.querySelector('#choix_projet');

    let SelectionProjet = true;
    let SelectionEvenement = true;

    projet.addEventListener('blur', (event) => {
        ChoixProjet();
    });

    evenement.addEventListener('blur', (event) => {
        ChoixProjet();
        ChoixEvenement();
    });

    choix_projet.addEventListener('click', (event) => {
        Redirection();
    });

    function ChoixProjet() {
        if (projet == null) {
            console.log("Sélectionner votre projet");
            SelectionProjet = true;
        } else {
            console.log("Projet sélectionné");
            SelectionProjet = false;
        }
    }

    function ChoixEvenement() {
        if (evenement == null) {
            console.log("Sélectionner votre évènement");
            SelectionEvenement = true;
        } else {
            console.log("Évènement sélectionné");
            SelectionEvenement = false;
        }
    }

    function Redirection() {
        if (SelectionProjet == false && SelectionEvenement == false) {
            window.location.href = "./page_principale.php";
            ChoixProjet();
            ChoixEvenement();
        }
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>