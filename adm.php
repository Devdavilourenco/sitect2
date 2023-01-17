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
         section{
            border-radius:black 20px;
            padding: 15px;
            width:630px;
            margin:auto;
            background: white;
            box-shadow: 3px 3px 3px;
            text-align: center;
         flex-direction: column;
        }
        body{
          background-color:grey;
          display: flex;
          min-height: 100vh;
         flex-direction: column;
        }
        .page-footer{
      background-color: firebrick;
  }
  .nav-wrapper{
    background-color:firebrick;
  }
  main {
    flex: 1 0 auto;
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
      <?php
          require './conexao.php'
      ?>

<nav>
    <div class="nav-wrapper" id="nav">
      <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY=" class="brand-logo center">CT BP FiGHT</a>
      <ul class="left hide-on-med-and-down">
        <li><a href="index.php">home</a></li>
        <li><a href="professores.php">treinadores</a></li>
        <li><a href="horarios.php">horários</a></li>
        <li><a href="localizacao.php">localização</a></li>
        <li><a href="cadastro.php">cadastrar</a></li>

      </ul>
    </div>
  </nav><br><br<<br><br><br>


  
    <form action="exibir.php" method="post">
<section>
    <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input id="icon_prefix" type="text" class="validate" name="login">
          <label for="icon_prefix">login</label>
        </div>
        <div class="input-field col s6">
          <input id="icon_telephone" type="tel" class="validate" name="senha">
          <label for="icon_telephone">senha</label>
        </div>
      </div>
</form>
  </div>
  <button class="btn waves-effect waves-light  teal darken-3 medium" type="submit" >Login
                <i class="material-icons right medium">send</i>
            </button>
</section><br><br><br><br>

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


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>