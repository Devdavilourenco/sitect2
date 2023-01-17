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
 ::-webkit-scrollbar{
    width: 13px;
}::-webkit-scrollbar-track{
    background: #ffffff;
    border-radius: 30px;
}::-webkit-scrollbar-thumb{
    background: #000000;
    border-radius: 30px;
}* {
box-sizing: border-box;
margin: 0;
padding: 0;
}
.map_montese{
    width: auto;
    float: right;
}
body {
font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
background: #fff;
color: #000;
font-size: 15px;
line-height: 1.5;
}

a {
color: #262626;
text-decoration: none;
}

ul {
list-style: none;
}

.container {
width: 90%;
max-width: 1100px;
margin: auto;
}

/* Nav */
.main-nav {
display: flex;
align-items: center;
justify-content: space-between;
height: 60px;
padding: 20px 0;
font-size: 13px;
}

.main-nav .logo {
width: 110px;
}

.main-nav ul {
display: flex;
}

.main-nav ul li {
padding: 0 10px;
}

.main-nav ul li a {
padding-bottom: 2px;
}

.main-nav ul li a:hover {
border-bottom: 2px solid #262626;
}

.main-nav ul.main-menu {
flex: 1;
margin-left: 20px;
}

.menu-btn {
cursor: pointer;
position: absolute;
top: 20px;
right: 30px;
z-index: 2;
display: none;
}

.btn {
cursor: pointer;
display: inline-block;
border: 0;
font-weight: bold;
padding: 10px 20px;
background: #262626;
color: #fff;
font-size: 15px;;
}

.btn:hover {
opacity: 0.9;
}

.dark {
color: #fff;
}

.dark .btn {
background: #f4f4f4;
color: #333;
}

/* Showcase */
.showcase {
width: 100%;
height: 400px;
background: url('https://i.ibb.co/zGSDGCL/slide1.png') no-repeat center center/cover;
display: flex;
flex-direction: column;
align-items: center;
text-align: center;
justify-content: flex-end;
padding-bottom: 50px;
margin-bottom: 20px;
}

.showcase h2, .showcase p {
margin-bottom: 10px;
}

.showcase .btn {
margin-top: 20px;
}

/* Home cards */
.home-cards {
display: grid;
grid-template-columns: repeat(4, 1fr);
grid-gap: 20px;
margin-bottom: 40px;
}

.home-cards img {
width: 100%;
margin-bottom: 20px;
}

.home-cards h3 {
margin-bottom: 5px;
}

.home-cards a {
display: inline-block;
padding-top: 10px;
color: #0067b8;
text-transform: uppercase;
font-weight: bold;
}

.home-cards a:hover i {
margin-left: 10px;
}

/* Xbox */
.xbox {
width: 100%;
height: 350px;
background: url('https://i.ibb.co/MS1X7Xy/xbox.jpg') no-repeat center center/cover;
margin-bottom: 20px;
}

.xbox .content {
width: 40%;
padding: 50px 0 0 30px;
}

.xbox p, .carbon p {
margin: 10px 0 20px;
}

/* Carbon */
.carbon {
width: 100%;
height: 350px;
background: url('https://i.ibb.co/kXHBqdx/xbox-3.jpg') no-repeat center center/cover;
}

.carbon .content {
width: 55%;
padding: 100px 0 0 30px;
}

/* Follow */
.follow {
display: flex;
align-items: center;
justify-content: flex-start;
margin: 30px 0 30px;
}

.follow * {
margin-right: 10px;
}

/* Links */
.links {
background: #f2f2f2;
color: #616161;
font-size: 12px;
padding: 35px 0;
}

.links-inner {
max-width: 1100px;
margin: 0 auto;
padding: 0 20px;
display: grid;
grid-template-columns: repeat(6, 1fr);
grid-gap: 10px;
align-items: flex-start;
justify-content: center;
}

.links li {
line-height: 2.8;
}

/* Footer */
.footer {
background: #f2f2f2;
color: #616161;
font-size: 12px;
padding: 20px 0;
}

.footer-inner {
max-width: 1100px;
margin: 0 auto;
padding: 0 20px 0 20px;
display: flex;
align-items: center;
justify-content: space-between;
}

.footer div {
margin-bottom: 20px;
display: flex;
align-items: center;
}

.footer div i {
margin-right: 10px;
}

.footer ul {
display: flex;
flex-wrap: wrap;
}

.footer li {
margin-right: 30px;
margin-bottom: 20px;
}

@media(max-width: 700px) {
.menu-btn {
display: block;
}

.menu-btn:hover {
opacity: 0.5;
}

.main-nav ul.right-menu {
margin-right: 50px;
}

.main-nav ul.main-menu {
display: block;
position: absolute;
top:0;
left: 0;
background: #f2f2f2;
width: 50%;
height: 100%;
border-right: #ccc 1px solid;
opacity: 0.9;
padding: 30px;
transform: translateX(-500px);
transition: transform 0.5s ease-in-out;
}

.main-nav ul.main-menu li {
padding: 10px;
border-bottom: #ccc solid 1px;
font-size: 14px;
}

.main-nav ul.main-menu li:last-child {
border-bottom: 0;
}

.main-nav ul.main-menu.show {
transform: translateX(-20px);
}

.home-cards {
grid-template-columns: repeat(2, 1fr);
}

.xbox .content p {
display: none;
}

.xbox .content h2 {
margin-bottom: 20px;
}

.carbon .content {
width: 85%;
}

.links .links-inner {
grid-template-columns: repeat(2, 1fr);
}
}

@media(max-width: 500px) {
.home-cards {
grid-template-columns: 1fr;
}

.links .links-inner {
grid-template-columns: 1fr;
}

.links .links-inner ul {
margin-bottom: 20px;

}
}#nav{
  background-color: #fc7b20e3 ;
    color:#fff;
}
      </style>
    </head>

    <body>

    <?php include "./includes/navbar.php"?> <!--Navbar-->

    <?php include "./includes/whatsapp.php"?> <!--Whatsapp-->

  
  
  
  


  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="border-radius: 0.5%;">
                <div class="carousel-item active">
                    <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY="><img src="img/carde2.jpg" class="d-block w-100" alt="..."></a>
                </div>
            <button class="carousel-control-prev" style="background-color: rgba(0, 0, 0, 0.168);" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" style="background-color: rgba(0, 0, 0, 0.168);" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>


<section class="container">
            <h1 style="text-align: center;" id="eventos">Modalidades do CT</h1>
            <br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                </style>
                <div class="col">
                    <div class="card" id="card">
                        <img src="img/muaythaicanva.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">MUAY THAI</h5>
                            <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY="><button type="button" class="btn btn-warning">Saiba mais sobre nosso CT</button></a>
                        </div>
                    </div>
                </div>
        
                <div class="col">
                    <div class="card" id="card">
                        <img src="img/boxecanva.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">BOXE</h5>
                            <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY="><button type="button" class="btn btn-warning">Saiba mais sobre nosso CT</button></a>
                        </div>
                    </div>
                </div>
        
                <div class="col">
                    <div class="card"  id="card">
                        <img src="img/jiujitsucanva.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">JIU JITSU</h5>
                            <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY="><button type="button" class="btn btn-warning">Saiba mais sobre nosso CT</button></a>
                        </div>
                    </div>
                </div>

                
            </div>
        </section>
        <br>

        <section class="container">
            <h1 style="text-align: center;" id="eventos">Planos de Mensalidade</h1>
            <br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                </style>
                <div class="col">
                    <div class="card" id="card">
                        <img src="img/planosct.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">MENSAL</h5>
                            <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY="><button type="button" class="btn btn-warning">Saiba mais sobre nosso CT</button></a>
                        </div>
                    </div>
                </div>
        
                <div class="col">
                    <div class="card" id="card">
                        <img src="img/planosct.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">TRIMESTRAL</h5>
                            <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY="><button type="button" class="btn btn-warning">Saiba mais sobre nosso CT</button></a>
                        </div>
                    </div>
                </div>
        
                <div class="col">
                    <div class="card"  id="card">
                        <img src="img/planosct.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PAGAMENTO</h5>
                            <a href="https://instagram.com/ct_bp_?igshid=Yzg5MTU1MDY="><button type="button" class="btn btn-warning">Saiba mais sobre nosso CT</button></a>
                        </div>
                    </div>
                </div>

                
            </div>
        </section>


<br>


<div class="container">
<h1 style="text-align: center;" id="eventos">Eventos</h1>
            <div class="card mb-3" style="max-width: 1040px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/graduacao.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8" id="montese">
                        <div class="card-body" id="">
                            <h2 class="card-title">GRADUAÇÃO</h5>
                            <p class="card-text">É um teste fisico e tecnico acontece de 3 em 3 meses para comprovar a evolução dos alunos</p>
                            <p class="card-text"><small class="text-muted"></small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-3" style="max-width: 1040px;" id="parangaba">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body">
                        </p>
              
                            <h2 class="card-title">SEMINÁRIO</h5>
                            <p class="card-text">Acontece algumas vezes no anoonde trazemos professores renomadospara transmitir seus conhecimentos</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="img/seminario.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
            </div>
            <div class="card mb-3" style="max-width: 1040px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="img/treinadorabell-2.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8" id="montese">
                        <div class="card-body" id="">
                        
              
                            <h2 class="card-title">AULÃO</h5>
                            <p class="card-text">acontece mensalmente É uma aula que reune todos os alunos do CTpodendo ser no proprio CT ou em outros locais</p>
                            <p class="card-text"><small class="text-muted"></small></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>

<?php include "./includes/footer.php"?> <!--Footer-->
    </body>
  </html>


  