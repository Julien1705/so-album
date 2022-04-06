<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/setting.css">
</head>

<body>
    <div class="row">
        <div class="col-5" id="Part_Connection">
            <img class="Logo_Connection" src="images/Logo.jpg">
            <div id="Inpute_Entré">
                <form method="post" action="/Traitement/SeSouvenir.php">
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
                    <div class="form-check Souvenir">
                        <input class="form-check-input" type="checkbox" value="" id="se_souvenir">
                        <small class="form-text">Se souvenir de moi</small>
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

    // ----------------------------------------------------------------------------------------------------------------
    // ---- DETECTION PRESENCE SOUVENIR DE MOI
    // ----------------------------------------------------------------------------------------------------------------

    let str_utilisateur = {
      login     : "",
      password  : ""
    };

    obj_utilisateur = localStorage.getItem("UTILISATEUR");
    str_utilisateur = JSON.parse(obj_utilisateur);
 
    if (obj_utilisateur){
      $('#login').val(str_utilisateur.login);
      $('#password').val(str_utilisateur.password);
      $('#se_souvenir').attr("checked",true);
    }

    // ----------------------------------------------------------------------------------------------------------------
    // ---- DETECTION SI SOUVENIR DE MOI
    // ----------------------------------------------------------------------------------------------------------------
    
    $("#se_souvenir").change(function()
    {
      var $checked = $("#se_souvenir").is(':checked')

      if ( $checked == true)
      {
        let str_utilisateur = {
            login : $('#login').val(),
            password   : $('#password').val()
        };

        obj_utilisateur = JSON.stringify(str_utilisateur);
        localStorage.setItem("UTILISATEUR",obj_utilisateur);
       }
      else
      {
        localStorage.removeItem('UTILISATEUR');
       }
    });


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
            if (SHA1(loginI.value) == loginBDD) {
                console.log("login correct");
                MauvaisLogin = false;
            } else {
                console.log("login incorect");
                MauvaisLogin = true;
            }
        }

        function ComparPassword(passwordBDD) {
            if (SHA1(passwordI.value) == passwordBDD) {
                console.log("password correct");
                MauvaisPassword = false;
            } else {
                console.log("password incorect");
                MauvaisPassword = true;
            }
        }

        function Verification() {
            console.log('login :' + SHA1(loginI.value) + '/ password' + SHA1(passwordI.value));

            Verif_Login();
            Verif_Password();

            if (loginI.classList[1] == "is-valid" && passwordI.classList[1] == "is-valid") {
                let loginBDD = "<?php
                                $mysqli = new mysqli("localhost", "root", "", "so_album");
                                $mysqli->set_charset("utf8");
                                $requete = "SELECT * FROM connexion";
                                $resultat = $mysqli->query($requete);
                                while ($ligne = $resultat->fetch_assoc()) {
                                    echo sha1($ligne['login']);
                                }
                                $mysqli->close();
                                ?>";
                let passwordBDD = "<?php
                                    $mysqli = new mysqli("localhost", "root", "", "so_album");
                                    $mysqli->set_charset("utf8");
                                    $requete = "SELECT * FROM connexion";
                                    $resultat = $mysqli->query($requete);
                                    while ($ligne = $resultat->fetch_assoc()) {
                                        echo sha1($ligne['password']);
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

        // -------------------------------------------------- //
        // Création du sha1 en php                            //
        // -------------------------------------------------- //

        function SHA1(msg) {
        function rotate_left(n,s) {
        var t4 = ( n<<s ) | (n>>>(32-s));
        return t4;
        };
        function lsb_hex(val) {
        var str='';
        var i;
        var vh;
        var vl;
        for( i=0; i<=6; i+=2 ) {
        vh = (val>>>(i*4+4))&0x0f;
        vl = (val>>>(i*4))&0x0f;
        str += vh.toString(16) + vl.toString(16);
        }
        return str;
        };
        function cvt_hex(val) {
        var str='';
        var i;
        var v;
        for( i=7; i>=0; i-- ) {
        v = (val>>>(i*4))&0x0f;
        str += v.toString(16);
        }
        return str;
        };
        function Utf8Encode(string) {
        string = string.replace(/\r\n/g,'\n');
        var utftext = '';
        for (var n = 0; n < string.length; n++) {
        var c = string.charCodeAt(n);
        if (c < 128) {
        utftext += String.fromCharCode(c);
        }
        else if((c > 127) && (c < 2048)) {
        utftext += String.fromCharCode((c >> 6) | 192);
        utftext += String.fromCharCode((c & 63) | 128);
        }
        else {
        utftext += String.fromCharCode((c >> 12) | 224);
        utftext += String.fromCharCode(((c >> 6) & 63) | 128);
        utftext += String.fromCharCode((c & 63) | 128);
        }
        }
        return utftext;
        };
        var blockstart;
        var i, j;
        var W = new Array(80);
        var H0 = 0x67452301;
        var H1 = 0xEFCDAB89;
        var H2 = 0x98BADCFE;
        var H3 = 0x10325476;
        var H4 = 0xC3D2E1F0;
        var A, B, C, D, E;
        var temp;
        msg = Utf8Encode(msg);
        var msg_len = msg.length;
        var word_array = new Array();
        for( i=0; i<msg_len-3; i+=4 ) {
        j = msg.charCodeAt(i)<<24 | msg.charCodeAt(i+1)<<16 |
        msg.charCodeAt(i+2)<<8 | msg.charCodeAt(i+3);
        word_array.push( j );
        }
        switch( msg_len % 4 ) {
        case 0:
        i = 0x080000000;
        break;
        case 1:
        i = msg.charCodeAt(msg_len-1)<<24 | 0x0800000;
        break;
        case 2:
        i = msg.charCodeAt(msg_len-2)<<24 | msg.charCodeAt(msg_len-1)<<16 | 0x08000;
        break;
        case 3:
        i = msg.charCodeAt(msg_len-3)<<24 | msg.charCodeAt(msg_len-2)<<16 | msg.charCodeAt(msg_len-1)<<8 | 0x80;
        break;
        }
        word_array.push( i );
        while( (word_array.length % 16) != 14 ) word_array.push( 0 );
        word_array.push( msg_len>>>29 );
        word_array.push( (msg_len<<3)&0x0ffffffff );
        for ( blockstart=0; blockstart<word_array.length; blockstart+=16 ) {
        for( i=0; i<16; i++ ) W[i] = word_array[blockstart+i];
        for( i=16; i<=79; i++ ) W[i] = rotate_left(W[i-3] ^ W[i-8] ^ W[i-14] ^ W[i-16], 1);
        A = H0;
        B = H1;
        C = H2;
        D = H3;
        E = H4;
        for( i= 0; i<=19; i++ ) {
        temp = (rotate_left(A,5) + ((B&C) | (~B&D)) + E + W[i] + 0x5A827999) & 0x0ffffffff;
        E = D;
        D = C;
        C = rotate_left(B,30);
        B = A;
        A = temp;
        }
        for( i=20; i<=39; i++ ) {
        temp = (rotate_left(A,5) + (B ^ C ^ D) + E + W[i] + 0x6ED9EBA1) & 0x0ffffffff;
        E = D;
        D = C;
        C = rotate_left(B,30);
        B = A;
        A = temp;
        }
        for( i=40; i<=59; i++ ) {
        temp = (rotate_left(A,5) + ((B&C) | (B&D) | (C&D)) + E + W[i] + 0x8F1BBCDC) & 0x0ffffffff;
        E = D;
        D = C;
        C = rotate_left(B,30);
        B = A;
        A = temp;
        }
        for( i=60; i<=79; i++ ) {
        temp = (rotate_left(A,5) + (B ^ C ^ D) + E + W[i] + 0xCA62C1D6) & 0x0ffffffff;
        E = D;
        D = C;
        C = rotate_left(B,30);
        B = A;
        A = temp;
        }
        H0 = (H0 + A) & 0x0ffffffff;
        H1 = (H1 + B) & 0x0ffffffff;
        H2 = (H2 + C) & 0x0ffffffff;
        H3 = (H3 + D) & 0x0ffffffff;
        H4 = (H4 + E) & 0x0ffffffff;
        }
        var temp = cvt_hex(H0) + cvt_hex(H1) + cvt_hex(H2) + cvt_hex(H3) + cvt_hex(H4);

        return temp.toLowerCase();
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