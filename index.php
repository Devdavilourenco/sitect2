<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"><!--Importante, faz os icons aparecerem no footrer-->
        <link rel="stylesheet" href="css/footerindex.css"><!--CSS do footer-->
        <link rel="stylesheet" href="css/estilobuttonzapinstaface.css">

     <style>
  h3{
    text-align: center;
    color: white;
  } 
  body{
    background-color: grey;
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }
  main{
    flex: 1 0 auto;

  }
  section{
    background-color:grey;
    display: inline-block;
    min-height: 100vh;
    flex-direction: column;
  }
  #nav{m 
    background-color:red darken-1;
    
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
  #mensalidade{
    text-align:center;
    margin-left:auto;
    margin-right:auto;
    display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
  }
      </style>
    </head>

    <body>

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
  </nav><br>

  <div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-fixed-item center">  
    </div>
    <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY=">
    <div class="carousel-item red white-text" href="#one!">
        <img src="img/carde2.jpg" width="500px" height="300px">
      <h2>First Panel</h2>
      <p class="white-text">This is your first panel</p>
    </div>
</a>
  </div><br> 

<h3><i>modalidades do CT</i></h3>

  <section>
  <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/muaythai2.jpg">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>MUAY THAI</p>
            </div>
            <div class="card-action">
              <a href="professores.php">Saiba mais sobre nossos treinadores</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/boxe.jpg">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>BOXE</p>
            </div>
            <div class="card-action">
              <a href="professores.php">Saiba mais sobre nossos treinadores</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/jiujitsu2.jpg">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>JIU JITSU</p>
            </div>
            <div class="card-action">
              <a href="professores.php">Saiba mais sobre nossos treinadores</a>
            </div>
          </div>
        </div>
      </div>
</section>

<h3><i>planos de mensalidade</i></h3>

<section id="mensalidade">
  <div class="row" id="plano">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/planosct.jpg">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>MENSAL</p>
            </div>
            <div class="card-action">
              <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY=">Saiba mais sobre nosso CT</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/planosct.jpg">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>MENSAL</p>
            </div>
            <div class="card-action">
              <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY=">Saiba mais sobre nosso CT</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/planosct.jpg">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>MENSAL</p>
            </div>
            <div class="card-action">
              <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY=">Saiba mais sobre nosso CT</a>
            </div>
          </div>
        </div>
  
        

        
      <br>
</section>

<h3><i>EVENTOS</i></h3>

<section>
  <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/graduacao.jpg">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>GRADUAÇÃO</p>
              <p>É um teste fisico e tecnico</p>
              <p>acontece de 3 em 3 meses</p>
              <p>para comprovar a evolução dos alunos</p>
            </div>
            <div class="card-action">
              <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY=">Saiba mais sobre nosso CT</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/seminario.jpg">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>SEMINÁRIO</p>
              <p>Acontece algumas vezes no ano</p>
              <p>onde trazemos professores renomados</p>
              <p>para transmitir seus conhecimentos</p>
            </div>
            <div class="card-action">
              <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY=">Saiba mais sobre nosso CT</a>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/treinadorabell-2.jpg">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
              <p>AULÃO</p>
              <p>acontece mensalmente</p>
              <p>É uma aula que reune todos os alunos do CT</p>
              <p>podendo ser no proprio CT ou em outros locais</p>
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
      <script>$('.carousel.carousel-slider').carousel({fullWidth: true});</script><br>

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


        