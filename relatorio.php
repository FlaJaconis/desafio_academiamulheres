<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <title>Relatório de anúncios</title>
</head>
<body>
<div class="w3-half w3-display-middle w3-center w3-border w3-border-indigo w3-light-gray">
<div class="w3-container w3-card-4 w3-center w3-padding w3-light-gray">
<h1 class = "w3-indigo w3-text-white w3-center w3-margin">Relatório</h1>
<h2 class="w3-indigo w3-text-white w3-center" style="font-weight:bold">Código de cliente: <?php echo " ".$_POST['codigo']?></h2>
<p class="w3-left w3-text-indigo" style="font-weight:bold">Nome do anúncio: </p>
<p class="w3-left w3-text-black"><?php echo " ".$_POST['anuncio']?></p>
<p class="w3-left w3-text-indigo" style="font-weight:bold">Nome do cliente: </p>
<p class="w3-left w3-text-black"><?php echo " ".$_POST['cliente']?></p>
<p class="w3-left w3-text-indigo" style="font-weight:bold">Data de início: </p>
<p class="w3-left w3-text-black"><?php echo " ".$_POST['data_ini']?></p>
<p class="w3-left w3-text-indigo" style="font-weight:bold">Data de término: </p>
<p class="w3-left w3-text-black"><?php echo " ".$_POST['data_sai']?></p>
<p class="w3-left w3-text-indigo" style="font-weight:bold">Valor investido por dia: </p>
<p class="w3-left w3-text-black"><?php echo " ".$_POST['valor']?></p>
<?php 
$valor_dia = $_POST['valor'];
//variável para visualizações por valor investido ao dia (a cada R$1 investido, 30 pessoas visualizam)
$result_orig = $valor_dia * 30;
//variável para os cliques (a cada 100 pessoas que visualizam, 12 clicam = 12%)
$cliques = 0.12;
//variável para os compartilhamentos (a cada 20 pessoas que clicam, 3 compartilham = 15%)
$compart = 0.15;
//variável para a quantidade de dias de vigência do anúncio
$data_sai = $_POST['data_sai'];
$data_ini = $_POST['data_ini'];
$periodo = $data_ini-$data_sai;
//variável para valor total investido no período
$total_per = $periodo*$valor_dia;

//variável para total de visualizações no período
$result1 = (($result_orig * $cliques) * $compart) * 40;
$result2 = (($result1 * $cliques) * $compart) * 40;
$result3 = (($result2 * $cliques) * $compart);
$result4 = $result1 + $result2 + $result3;
$resultado = ($result4 + $result_orig)*$periodo;

//variável para total de cliques no período
$clique1 = (($result_orig * $cliques);
$clique2 = (($clique1 * $compart) * 40) * $clique;
$clique3 = (($clique2 * $compart) * 40) * $clique;
$clique4 = (($clique2 * $compart) * 40) * $clique;
$cliquetotal = $clique1 + $clique2 + $clique3 + $clique4

//variável para total de cliques no período
$compart1 = (($result_orig * $cliques)*$compart;
$compart2= (($compart1 * $cliques) * 40) * $compart;
$compart3  = (($compart2 * $cliques) * 40) * $compart;
$compart4  = (($compart3 * $cliques) * 40) * $compart;
$compartotal = $compart1 + $compart2  + $compart3  + $compart4 
?>
<p class="w3-left w3-text-indigo" style="font-weight:bold">Valor investido por período: 
<p class="w3-left w3-text-black"><?php echo " ".$total_per?></p>
<p class="w3-left w3-text-indigo" style="font-weight:bold">Visualizações por perído: 
<p class="w3-left w3-text-black"><?php echo " ".$resultado?></p>
<p class="w3-left w3-text-indigo" style="font-weight:bold">Cliques por perído: 
<p class="w3-left w3-text-black"><?php echo " ".$cliquetotal?></p>
<p class="w3-left w3-text-indigo" style="font-weight:bold">Compartilhamentos por perído: 
<p class="w3-left w3-text-black"><?php echo " ".$compartotal?></p>
</div>
</div>
</body>
</html>