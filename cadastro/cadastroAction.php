<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" h ref = "https://www.w3schools.com/w3css/4/w3.css">
    <title>Cadastro-action</title>
</head>
<body>
<a href="cadastro.php" class="w3-display-topleft">
  <i class="fa fa-chevron-left w3-large w3-indigo w3-button w3-xxlarge"></i> 
 </a>
 <div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
  <?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "usbw";
    $dbname = "serv_fake";
    $conexao = new mysqli($servername, $username, $password, $dbname);
    if ($conexao->connect_error) {
        die("Connection failed: " . $conexao->connect_error);}

    $sql = "INSERT INTO anuncios (anuncio, cliente, data_inicio, data_saida, valor)
            VALUES ('".$_POST['edtnome_anun']."', '".$_POST['edt_cliente']."', '".$_POST['data_ini']."', '".$_POST['data_sai']."','".$_POST['edtvalor']."',)";
        
        if ($conexao->query($sql) === TRUE) {
        echo '
        <a href="index.php">
        <h1 class="w3-button w3-indigo">Anúncio salvo com sucesso!</h1>
        </a>
        ';
        } else {
            echo '
            <a href="index.php">
            <h1 class="w3-button w3-indigo">ERRO! </h1>
            </a>
            ';
            }
            $conexao->close();
    ?>
 </div>
</body>
</html>