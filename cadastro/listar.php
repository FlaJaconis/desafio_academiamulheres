<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Listagem de Anúncios</title>
</head>
<body>
<a href="index.php" class="w3-display-topleft">
<i class="fa fa-chevron-left w3-large w3-indigo w3-button w3-xxlarge"></i> 
</a>

<?php
 $servername = "localhost:3307";
 $username = "root";
 $password = "usbw";
 $dbname = "serv_fake";
 $conexao = new mysqli($servername, $username, $password, $dbname);
 if ($conexao->connect_error) {
 die("Connection failed: " . $conexao->connect_error);
 }
 echo '
 <div class="w3-padding w3-display-topmiddle w3-margin">
 <h1 class="w3-center w3-indigo w3-round">Listagem de Anúncios</h1>
 <table class="w3-table-all w3-centered">
 <thead> 
 <tr class="w3-center w3-indigo">
 <th>Código do Cliente</th>
 <th>Nome do anúncio</th>
 <th>Cliente:</th>
 <th>Data de início:</th>
 <th>Data de término:</th>
 <th>Valor:</th>
 <th>Excluir</th>
 <th>Atualizar</th>
 <th>Relatório</th>
 </tr>
 <thead>
 ';

$sql = "SELECT * FROM anuncios";
$resultado = $conexao->query($sql);
 if($resultado != null)
 foreach($resultado as $linha) {
    echo '<tr>';
    echo '<td>'.$linha['txtID'].'</td>';
    echo '<td>'.$linha['edtnome_anun'].'</td>';
    echo '<td>'.$linha['edt_cliente'].'</td>';
    echo '<td>'.$linha['data_ini'].'</td>';
    echo '<td>'.$linha['data_sai'].'</td>';
    echo '<td>'.$linha['edtvalor'].'</td>';
    echo '<td><a href="excluir.php?codigo='.$linha['txtID'].'&anuncio='.$linha['edtnome_anun'].'&cliente='.$linha['edt_cliente'].'&data_ini='.$linha['data_ini'].'&data_sai='.$linha['valor'.$linha['edtvalor'].'">
    <i class="fa fa-remove w3-large w3-text-indigo"></i> </a></td></td>';
    echo '<td><a href="excluir.php?codigo='.$linha['txtID'].'&anuncio='.$linha['edtnome_anun'].'&cliente='.$linha['edt_cliente'].'&data_ini='.$linha['data_ini'].'&data_sai='.$linha['data_sai'].$linha['valor'.$linha['edtvalor'].'">
    <i class="fa fa-refresh w3-large w3-text-indigo"></i> </a></td></td>';
    echo '<td><a href="relatorio.php <i class="fa fa-file-text-o w3-large w3-text-indigo"></i> </a></td></td>';
    echo '</tr>';
    }
    echo '
    </table>
    </div>';
    $conexao->close();
?>
</body>
</html>