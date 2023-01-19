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
        h2{
            text-align: center;
            color: white;
        } 
        section{
            border-radius:black 20px;
            padding: 15px;
            width:630px;
            margin:auto;
            background: white;
            box-shadow: 3px 3px 3px;
            text-align: center;
        }
        body{
            background: grey;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        main {
    flex: 1 0 auto;
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

        <h2><i>localização do CT</i></h2>
        <section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.2491542256776!2d-38.515299386046216!3d-3.755848897267531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c749ebe3b70af9%3A0x7a48a489cb9476c1!2sCT%20BP%20FIGHT!5e0!3m2!1spt-BR!2sbr!4v1671752999934!5m2!1spt-BR!2sbr"
    width="600" height="450" style="border:0;" allowfullscreen=""
    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section><br>
     



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