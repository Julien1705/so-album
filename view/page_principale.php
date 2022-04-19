<!doctype html>
<html lang="en">

<head>
    <title>Page Principale</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/5/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="../css/page_principale.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-success m-2" href="../index.php"><i class="bi bi-house-door"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success m-2" href="./choix_projet.php"><i class="bi bi-box-arrow-left"></i></a>
                    </li>
                </ul>

                <ul class="nav navbar-nav flex-fill justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="#"><img src="../images/logo_blanc_fond_transparent.png" alt="logo" width="25%"></a></li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-success m-2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">EVENEMENTS</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">MR</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">PR</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">CT</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle btn btn-success m-2" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ALBUM</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Transfert</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Organiser</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Visualiser</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Acces Folder</a>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link btn btn-danger m-2">GENERER</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid content">
        <div class="row">
            <div class="col-4" id="colonne_left">
                <div class="form-group mt-3">
                    <select class="form-select" id="exampleSelect1">
                        <option>Mariage</option>
                    </select>
                </div>
                <div class="row mt-3">
                    <div class="col-6 mb-2">
                        <select class="form-select" id="exampleSelect1">
                            <option></option>
                        </select>
                    </div>
                    <div class="col-6 mb-2">
                        <select class="form-select" id="nb_photos">
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="row d-flex justify-content-center" id="double-page">
                            <div class="col-6 page m-1 pointer bg-selected"></div>
                            <div class="col-6 page m-1 pointer bg-selected"></div>
                        </div>
                    </div>
                    <div class="col-6 d-flex justify-content-center" id="simple-page">
                        <div class="one-page m-1 pointer bg-default"></div>
                    </div>
                </div>
                <div class="dropdown-divider divider-main"></div>
                <div class="border rounded maquette-choisi" id="maquette-choisi"></div>
                <div class="row scroll-bar mt-3" id="liste-maquette">
                </div>
            </div>
            <div class="col-8" id="colonne_right">
                <div class="row justify-content-between mt-3">
                    <div class="col-4">
                        <button class="btn btn-success" id="affichage_complet"><i id="circle-arrow" class="bi bi-arrow-left-circle"></i></button>
                    </div>
                    <div class="col-4">
                        <div class="btn btn-success rounded-pill info_nb_psd">23 / 72</div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-1">
                        <button class="btn btn-success" id="case_plus"><i id="icon-circle" class="bi bi-plus-circle"></i></button>
                    </div>
                    <div class="col-11 d-flex">
                        <div class="text-white  align-self-center">2019-9401 > MR > 01_ENTREE</div>
                    </div>
                </div>
                <div class="row mt-3 d-flex justify-content-around">
                    <div class="col-1 case-choice" ondrop="drop(event)" id="A" ondragover="allowDrop(event)">A</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="B" ondragover="allowDrop(event)">B</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="C" ondragover="allowDrop(event)">C</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="D" ondragover="allowDrop(event)">D</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="E" ondragover="allowDrop(event)">E</div>                    
                    <div class="col-1 case-choice" ondrop="drop(event)" id="F" ondragover="allowDrop(event)">F</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="G" ondragover="allowDrop(event)">G</div>                    
                    <div class="col-1 case-choice" ondrop="drop(event)" id="H" ondragover="allowDrop(event)">H</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="I" ondragover="allowDrop(event)">I</div>                    
                    <div class="col-1 case-choice" ondrop="drop(event)" id="J" ondragover="allowDrop(event)">J</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="K" ondragover="allowDrop(event)">K</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="L" ondragover="allowDrop(event)">L</div> 
                </div>
                <div class="row mt-3 d-none" id="row_case_plus">
                    <div class="col-1 case-choice" ondrop="drop(event)" id="M" ondragover="allowDrop(event)">M</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="N" ondragover="allowDrop(event)">N</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="O" ondragover="allowDrop(event)">O</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="P" ondragover="allowDrop(event)">P</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="Q" ondragover="allowDrop(event)">Q</div>                    
                    <div class="col-1 case-choice" ondrop="drop(event)" id="R" ondragover="allowDrop(event)">R</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="S" ondragover="allowDrop(event)">S</div>                    
                    <div class="col-1 case-choice" ondrop="drop(event)" id="T" ondragover="allowDrop(event)">T</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="U" ondragover="allowDrop(event)">U</div>                    
                    <div class="col-1 case-choice" ondrop="drop(event)" id="V" ondragover="allowDrop(event)">V</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="W" ondragover="allowDrop(event)">W</div>
                    <div class="col-1 case-choice" ondrop="drop(event)" id="X" ondragover="allowDrop(event)">X</div> 
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <div class="btn btn-success rounded-pill">01_ENTREE</div>
                        <div class="btn btn-success rounded-pill">01_ENTREE</div>
                        <div class="btn btn-success rounded-pill">01_ENTREE</div>
                    </div>
                    <div class="col-4">
                        <form class="d-flex">
                            <input class="form-control me-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-2 ">
                        <button class="btn btn-success info_nb_psd mx-1"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-success info_nb_psd" id="btn-zoom"><i id="icon-zoom" class="bi bi-zoom-out"></i></button>
                    </div>
                </div>
                <div class="row mt-3 scroll-bar-img" id="scroll-bar-img">

                        <!-- CHARGEMENT DES IMAGES -->
                        <?php for ($i = 0; $i < 100; $i++) : ?>
                            <?php echo "<img class='col-1 offset-md-0 mb-2 zoom rounded' src='../images/placeholder_1.png' draggable='true' ondragstart='drag(event)' id='drag$i'> ";
                            endfor;
                        ?>

                        <!-- CHARGEMENT DES DIVES POUBELLE POUR REPLACER LES IMAGES -->
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                            <?php echo "<div class='col-1 zoom' ondrop='drop(event)' id='Poubelle$i' ondragover='allowDrop(event)' draggable='true' ondragstart='drag(event)'></div>";
                            endfor;
                        ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../js/js_page_principale.js"></script>
    <script src="../js/DragAndDrop.js"></script>

</body>

</html>