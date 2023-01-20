
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

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
        