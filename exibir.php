<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Exibir</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/materialize.css">
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
		.page-footer{
			margin-top: 5%;
			margin-bottom: 0px;
		}
        h5{
            margin-left:  100px;
        }
        h3{
            color:#00695c;
        }
        .footer-copyright{
            margin-left: 400px;
        }
        .kk:hover{
            background-color: #303f9f;
        }
        .efeito:hover{
            background-color: #303f9f;
        }
        #tabela{
             box-sizing: border-box; position: relative;
             margin-left:104px; overflow:auto;
             margin-right: 104px; overflow: auto; 
             box-shadow: 1px;
             margin-top: 2%;
        }
        body{
            background-color: #eeeeee;
        }  
        .header,.footer,.body { width: 100%; }
        th{
            color: white;
        }
        td{
            color: white;
        }
        .kkk{
            margin-left: 500px;
        }
        .kkkk:hover{
            background-color: #00695c;
        }
        
        
        .pago{
            background: blue;
            
        }
        .naopago{
            background: red;
            
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
            <?php 
                require './conexao.php';
                session_start();
                if((!isset($_SESSION['login'])==true) and (!isset($_SESSION['senha'])==true)){
                  unset($_SESSION['login']);
                  unset($_SESSION['senha']);
                  header('location:index.php');
                }else{
                  echo "<li class='kkk'>
                  <i class='material-icons'>face</i></li> ".$_SESSION['login'];            
                }
            ?>
      </ul>
        <div class="z-depth-4" id="tabela">
            
            
            
            <table class="responsive-table z-depth-4 centered efeito #00695c teal darken-3">
                <center><br><i class="material-icons medium">description</i><H3>LISTAR CADASTRO<br>
                      <div class="container">
                <div class="col s12" id="kk">  
                    <center>
                    <div class="row">
                        <form action="exibir.php" method="post">
                            <div class="input-field col s6">
                                <input placeholder="Ex: davi" id="first_name" name="nome_pesq" type="text" class="validate">
                               <label for="first_name">PESQUISA POR NOME</label>
                            </div>
                            
                                <div class="input-field col s3">
                            
                                <button class="btn waves-effect waves-light #00695c teal darken-3 medium" type="submit" >Pesquisar
                                    <i class="material-icons right medium">send</i>
                                </button>
                                    <div class="input-field col s6">
                            
                        </form>
                    </div>
                </div>
            </div>
                    </center>
                        
            
            
            
            
            </center>
            
            <thead class="efeito">
              <tr>
                
                <th>NOME</th>
                <th>TELEFONE</th>
                <th>ENDERECO</th>
                <th>EMAIL</th>
               </thead>


              <?php 
                require './conexao.php';
                $nome_pesq = @$_POST['nome_pesq'];
                
                $consultar= "SELECT * FROM cadastro where nome='$nome_pesq'order by nome desc";
                $con= $mysqli-> query($consultar) or die ($mysqli->errno);
                while ($dados= $con->fetch_array()) {
                ?>

                <?php 
                require './conexao.php';
                $telefone = @$_POST['telefone'];
                
                $consultar= "SELECT * FROM cadastro where telefone='$telefone'order by telefone desc";
                $con= $mysqli-> query($consultar) or die ($mysqli->errno);
                while ($dados= $con->fetch_array()) {
                ?>

                <?php 
                require './conexao.php';
                $endereco = @$_POST['endereco'];
                
                $consultar= "SELECT * FROM cadastro where endereco='$endereco'order by endereco desc";
                $con= $mysqli-> query($consultar) or die ($mysqli->errno);
                while ($dados= $con->fetch_array()) {
                ?>

                <?php 
                require './conexao.php';
                $email = @$_POST['email'];
                
                $consultar= "SELECT * FROM cadastro where email='$email'order by email desc";
                $con= $mysqli-> query($consultar) or die ($mysqli->errno);
                while ($dados= $con->fetch_array()) {
                ?>





            <tbody class="efeito" border="1">
              <tr>
                <td><?php echo $dados['id']; ?></td>
                <td><?php echo $dados['nome']; ?></td>
                <td><?php echo $dados['telefone']; ?></td>
                <td><?php echo $dados['endereco']; ?></td>
                <td><?php echo $dados['email']; ?></td>
                
                 <td>
                     <a href="detalhes.php?id=<?php echo $dados['id']; ?>">
                    <i style="font-size: 30px;" class="material-icons prefix">list</i>
                </a>
            </td>
                
              </tr>
             <?php } ?>  
             <?php } ?>
             <?php } ?> 
             <?php } ?>      

            </tbody>
          </table>
        </div>
    
 	<footer class="page-footer z-depth-4 #00695c yellow-text teal darken-3">
        
            	 
                	<center><h5 class="white-text">CH Desenvolvimento de Sistemas WEB</h5>
                            © 2020 Todos os direitos reservados<br>
                            TIM (88)9.9915-5630 / Whats OI (85)9.8817-1498
                        </center>
            <br>
              
              	
             
        </div>
         
    </footer>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
    $('select').formSelect();
  });
        $(document).ready(function(){
    $('.datepicker').datepicker();
  });
        $(document).ready(function(){
    $('.sidenav').sidenav();
  });
    </script>
</body>
</html>