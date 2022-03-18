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
            <img class="Logo_Connection" src="images/logo.PNG">
              <div id="Inpute_Entré">
                <label>Email :</label>
                <input type="text" id="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="fals" placeholder="Email">
                <label>Mot de passe :</label>
                <input type="password" id="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
                <a href="./view/choix_projet.php"><button type="submit" id="BTN_Connexion" class="btn btn-primary">Connexion</button></a><br>

                <div id="ErreurLogin" style="display: none;" class="alert alert-dismissible alert-warning">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  <h4 class="alert-heading">Attention !</h4>
                  <p class="mb-0">Une erreur est survenue avec votre login</a>.</p>
                  <small id="" class="form-text text-muted">L'adresse nécessite un @ ainsi qu'un point.</small>
                </div>

                <div id="ErreurPassword" style="display: none;" class="alert alert-dismissible alert-warning">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  <h4 class="alert-heading">Attention !</h4>
                  <p class="mb-0">Une erreur est survenue avec votre mot de passe</a>.</p>
                  <small id="" class="form-text text-muted">8 caractère minimum et un caractère spéciale (!?@$).</small>
                </div>

              </div>
          </div>
          <div class="col-7" id="Part_Fond"></div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <script>

        const login         = document.querySelector('#login');
        const password      = document.querySelector('#password');
        const seconnecter   = document.querySelector('#seconnecter')

        let ErreurLogin     = document.getElementById("ErreurLogin");
        let ErreurPassword  = document.getElementById("ErreurPassword");

        login.addEventListener('blur', (event) => {
            Verif_Login();
        });

        password.addEventListener('blur', (event) => {
            Verif_Login();
            Verif_Password();
        });

        seconnecter.addEventListener('blur', (event) => {
            Verification();
        });

        function Verification()
        {
            console.log('login :' +login.value+ '/ password' +password.value);

            Verif_Login();
            Verif_Password();
        };
        

        function Verif_Login(){
            const Term1 = '.';
            const Term2 = '@';
            const indexOfFirst = login.value.indexOf(Term1);
            const indexOfSecond = login.value.indexOf(Term2);

            console.log (`${indexOfFirst}`);
            console.log (`${indexOfSecond}`);

            if (indexOfFirst == -1){
                console.log (`Il manque un point a votre adress mail`);
                login.classList.add('is-invalid');
                login.classList.remove('is-valid');
                login.style.backgroundColor = "#FFBEBE";
                ErreurLogin.style.display = "block";
            }

            if (indexOfSecond == -1){
                login.classList.add('is-invalid');
                login.classList.remove('is-valid');
                console.log (`Il manque un @ a votre adress mail`);
                login.style.backgroundColor = "#FFBEBE";
                ErreurLogin.style.display = "block";
            }

            else{
                login.classList.remove('is-invalid');
                login.classList.add('is-valid');
                login.style.backgroundColor = "#C6FFBE";
                ErreurLogin.style.display = "none";
            }
        }

        function Verif_Password(){
            const Caract_Speciaux = /[$@!?]/;
            if (!password.value.match(Caract_Speciaux))
            {
                password.classList.add('is-invalid');
                password.classList.remove('is-valid');
                password.style.backgroundColor = '#FFBEBE';
                console.log (`Il manque un caractère spéciale à votre mots de pass`);
                ErreurPassword.style.display = "block";
            }
            
            else{
                password.classList.remove('is-invalid');
                password.classList.add('is-valid');
                password.style.backgroundColor = '#C6FFBE';
                ErreurPassword.style.display = "none";
            }
        }
    </script>
  
  </body>
</html>