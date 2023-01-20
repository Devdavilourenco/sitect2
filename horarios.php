<!DOCTYPE html>
  <html>
    <head>
       <!--Import Google Icon Font-->
       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      
      <meta name="author" content="Nil David">
      <meta charset="utf-8">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"><!--Importante, faz os icons aparecerem no footrer-->
        <link rel="stylesheet" href="css/footerindex.css"><!--CSS do footer-->
        <link rel="stylesheet" href="css/estilobuttonzapinstaface.css">


      <style>
           body{
            background-color: grey;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
           }
           section{
            display: inline-block;
            min-height: 100vh;
            flex-direction: column;
            background-color:grey;
           }
           h3{
            text-align: center;
            color: white;
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
 

      </style>


    </head>

    <body>
     
    <?php include "./includes/navbar.php"?> <!--Navbar-->

    <?php include "./includes/whatsapp.php"?> <!--Whatsapp--><br>
  
  <section class="container">
            <h1 style="text-align: center; color:white;" id="eventos">Horários de Treino</h1>
            <br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                </style>
                <div class="col">
                    <div class="card" id="card">
                        <img src="img/treinobell2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><strong><i>17:00</i></strong></h5>
                            <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY="><button type="button" class="btn btn-warning">Saiba mais sobre nosso CT</button></a>
                        </div>
                    </div>
                </div>
        
                <div class="col">
                    <div class="card" id="card">
                        <img src="img/treinocanva1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><strong><i>18:00</i></strong></h5>
                            <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY="><button type="button" class="btn btn-warning">Saiba mais sobre nosso CT</button></a>
                        </div>
                    </div>
                </div>
        
                <div class="col">
                    <div class="card"  id="card">
                        <img src="img/treinobell1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><strong><i>19:00</i></strong></h5>
                            <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY="><button type="button" class="btn btn-warning">Saiba mais sobre nosso CT</button></a>
                        </div>
                    </div>
                </div>

                
            </div>
        </section>
  
  
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

      <?php include "./includes/footer.php"?> <!--Footer-->
    </body>
  </html>
        