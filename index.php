<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="Option.js"> </script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/setting.css">
</head>

<body>
    <div class="row">
        <div class="col-5" id="Part_Connection">
            <img class="Logo_Connection" src="images/Logo.jpg">
            <div id="Inpute_Entré">
                <form method="post">
                    <div id="PartieEmail">
                        <label>Email :</label>
                        <input type="text" id="login" class="form-control" aria-describedby="emailHelp" placeholder="Email">

                        <div id="ErreurLogin" style="display: none;" class="alert alert-dismissible alert-warning">
                            <p class="mb-0"><b>Attention ! </b>Une erreur est survenue avec votre login</a>.</p>
                            <small id="" class="form-text text-muted">L'adresse nécessite un @ ainsi qu'un point.</small>
                        </div>
                    </div>

                    <div id="PartieMDP">
                        <label>Mot de passe :</label>
                        <input type="password" id="password" class="form-control" aria-describedby="emailHelp" placeholder="Password">

                        <div id="ErreurPassword" style="display: none;" class="alert alert-dismissible alert-warning">
                            <p class="mb-0"><b>Attention ! </b>Une erreur est survenue avec votre mot de passe</a>.</p>
                            <small id="" class="form-text text-muted">8 caractère minimum et un caractère spéciale (!?@$).</small>
                        </div>
                    </div>

                    <button type="button" id="seconnecter" class="btn btn-primary BTN_Connexion">Connexion</button><br>
                </form>
            </div>
        </div>
        <div class="col-7" id="Part_Fond"></div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        const loginI = document.querySelector('#login');
        const passwordI = document.querySelector('#password');
        const seconnecter = document.querySelector('#seconnecter');
        const loginValide = document.querySelector('#loginv2');
        const passwordValide = document.querySelector('#passwordv2');

        let ErreurLogin = document.getElementById("ErreurLogin");
        let ErreurPassword = document.getElementById("ErreurPassword");
        let MauvaisLogin = true;
        let MauvaisPassword = true;
        let loginBDD = "";
        let passwordBDD = "";

        loginI.addEventListener('blur', (event) => {
            Verif_Login();
        });

        passwordI.addEventListener('blur', (event) => {
            Verif_Login();
            Verif_Password();
        });

        seconnecter.addEventListener('click', (event) => {
            Verification();
            Redirection();
        });

        function ComparLogin(loginBDD) {
            if (loginI.value == loginBDD) {
                console.log("login correct");
                MauvaisLogin = false;
            } else {
                console.log("login incorect");
                MauvaisLogin = true;
            }
        }

        function ComparPassword(passwordBDD) {
            if (passwordI.value == passwordBDD) {
                console.log("password correct");
                MauvaisPassword = false;
            } else {
                console.log("password incorect");
                MauvaisPassword = true;
            }
        }

        function Verification() {
            console.log('login :' + loginI.value + '/ password' + passwordI.value);

            Verif_Login();
            Verif_Password();

            if (loginI.classList[1] == "is-valid" && passwordI.classList[1] == "is-valid") {
                let loginBDD = "<?php
                                $mysqli = new mysqli("localhost", "root", "", "so_album");
                                $mysqli->set_charset("utf8");
                                $requete = "SELECT * FROM connexion";
                                $resultat = $mysqli->query($requete);
                                while ($ligne = $resultat->fetch_assoc()) {
                                    echo $ligne['login'];
                                }
                                $mysqli->close();
                                ?>";
                let passwordBDD = "<?php
                                    $mysqli = new mysqli("localhost", "root", "", "so_album");
                                    $mysqli->set_charset("utf8");
                                    $requete = "SELECT * FROM connexion";
                                    $resultat = $mysqli->query($requete);
                                    while ($ligne = $resultat->fetch_assoc()) {
                                        echo $ligne['password'];
                                    }
                                    $mysqli->close();
                                    ?>";
                ComparLogin(loginBDD);
                ComparPassword(passwordBDD);
            }
        };


        function Verif_Login() {
            const Term1 = '.';
            const Term2 = '@';
            const indexOfFirst = loginI.value.indexOf(Term1);
            const indexOfSecond = loginI.value.indexOf(Term2);

            console.log(`${indexOfFirst}`);
            console.log(`${indexOfSecond}`);

            if (indexOfFirst == -1) {
                console.log(`Il manque un point a votre adress mail`);
                loginI.classList.add('is-invalid');
                loginI.classList.remove('is-valid');
                loginI.style.backgroundColor = "#FFBEBE";
                ErreurLogin.style.display = "block";
            }

            if (indexOfSecond == -1) {
                loginI.classList.add('is-invalid');
                loginI.classList.remove('is-valid');
                console.log(`Il manque un @ a votre adress mail`);
                loginI.style.backgroundColor = "#FFBEBE";
                ErreurLogin.style.display = "block";
            } else {
                loginI.classList.remove('is-invalid');
                loginI.classList.add('is-valid');
                loginI.style.backgroundColor = "#C6FFBE";
                ErreurLogin.style.display = "none";
            }
        }

        function Verif_Password() {
            const Caract_Speciaux = /[$@!?]/;
            if (!passwordI.value.match(Caract_Speciaux)) {
                passwordI.classList.add('is-invalid');
                passwordI.classList.remove('is-valid');
                passwordI.style.backgroundColor = '#FFBEBE';
                console.log(`Il manque un caractère spéciale à votre mots de pass`);
                ErreurPassword.style.display = "block";
            } else {
                passwordI.classList.remove('is-invalid');
                passwordI.classList.add('is-valid');
                passwordI.style.backgroundColor = '#C6FFBE';
                ErreurPassword.style.display = "none";
            }
        }

        function Redirection() {
            if (MauvaisPassword == false && MauvaisLogin == false) {
                console.log(MauvaisPassword);
                window.location.href = "./view/choix_projet.php";
            }
        }
    </script>
</body>

</html>