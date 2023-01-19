
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <script>
      function voltar(){
        window.history.forward(index.php);
      }
     </script>


    </head>

    <body>
      <a href="index.php">
    <input type="submit" value="voltar">
    </a>

        <?php
        require './conexao.php';
            $nome      = $_POST['nome'];
            $telefone  = $_POST['telefone'];
            $endereco  = $_POST['endereco'];
            $email     = $_POST['email'];


            $inserir = $mysqli->query("INSERT INTO cadastro VALUES(
           '0','$nome','$telefone','$endereco','$email')");

if ($inserir) {
      
    echo "<center><h2>Cadastro Realizado</h2></center>";
}else{
    
    echo "Erro ao cadastrar".  $mysqli->mysql_errno();
    echo "Erro ao cadastrar". mysql_error();
}      

        ?>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
        