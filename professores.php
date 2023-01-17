<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"><!--Importante, faz os icons aparecerem no footrer-->
        <link rel="stylesheet" href="css/footerindex.css"><!--CSS do footer-->
        <link rel="stylesheet" href="css/estilobuttonzapinstaface.css">

      <style>
        body{
          background-color:grey;
          display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        main {
    flex: 1 0 auto;
  }
  section{
    background-color:grey;
    display: inline-block;
    min-height: 100vh;
    flex-direction: column;
  }
  h3{
    text-align:center;
    color: white;
  }
  .page-footer{
      background-color: firebrick;
  }
  .nav-wrapper{
    background-color:firebrick;
  }
  #zap{
    color:white;
  }
  #insta{
    color:white;
  }
  #face{
    color:white;
  }
  #git{
    color:white;
  }
        </style>
    </head>

    <body>
     
    <nav>
    <div class="nav-wrapper">
      <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY=" class="brand-logo center">CT BP FiGHT</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="index.php">home</a></li>
        <li><a href="professores.php">treinadores</a></li>
        <li><a href="horarios.php">horários</a></li>
        <li><a href="localizacao.php">localização</a></li>
      </ul>
    </div>
  </nav><br>

  <h3><i>treinadores</i></h3>

  <section>
  <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/davicanva.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>treinador Davi Lourenço</p>
              <p>grau azul escuro de muay thai</p>
              <p>6 graduações</p>
              <p>4 anos de muay thai</p>
            </div>
            <div class="card-action">
              <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY=">Saiba mais sobre nosso CT</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/bellcanva.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>Treinadora Bell Pereira </p>
              <p>grau preto de muay thai</p>
              <p>12 graduações</p>
              <p>12 anos de muay thai</p>
            </div>
            <div class="card-action">
              <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY=">Saiba mais sobre nosso CT</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/cordeirocanva.png">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>Treinador Cordeiro Cruz</p>
              <p>grau azul claro de muay thai</p>
              <p>5 graduações</p>
              <p>3 anos de muay thai</p>
            </div>
            <div class="card-action">
              <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY=">Saiba mais sobre nosso CT</a>
            </div>
          </div>
        </div>
      </div>
      <br>
</section>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <main>
      <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">CT BP FIGHT</h5>
                <p class="grey-text text-lighten-4"><i>mais informações</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">redes sociais</h5>
                <div class="todosicon">
                   <a class="ri-whatsapp-line icon" id="zap" href="https://wa.me/5585988719784" ></a>
                   <a class="ri-instagram-line icon" id="insta" href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY="></a>
                   <a class="ri-facebook-line icon" id="face" href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY="></a>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <i class="material-icons">copyright</i>2023 todos os direitos reservados
            <p> <a class="ri-github-line icon" id="git" href="https://github.com/Devdavilourenco"></a>Devdavilourenco 
            desenvolvimento de sistemas web</p> 
            </div>
          </div>
        </footer>
</main>
    </body>
  </html>
        