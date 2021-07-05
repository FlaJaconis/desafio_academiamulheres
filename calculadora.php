<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "stylesheet" href = "https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
<title>Calculadora de alcance</title>
</head>
<body>
<!--layout da calculadora e campo de inserção de valor "calculadora.php"-->
<div class="w3-half w3-display-middle w3-center w3-border w3-border-indigo">
<div class="w3-container w3-card-4 w3-center w3-padding w3-light-gray">
<div class="w3-container w3-indigo w3-center w3-text-white w3-xxlarge" 
style="text-shadow:1px 1px 0 #444; font-weight:bold; font-family:sans-serif"> CALCULADORA </div>

<h2 class="w3-text-indigo w3-xlarge w3-padding" style="font-weight:bold; font-family:sans-serif; text-shadow:1px 1px 0 #444;">PROJEÇÃO DE ALCANCE - ANÚNCIOS</h2>
<form action="calculadoraAction.php" class="w3-container" method = "post">
<label class="w3-left w3-xlarge w3-section w3-text-indigo" style="font-family:sans-serif; font-weight:bold;">Valor investido:</label>
<input type="number" step="0.01" name="edtvalor" class= "w3-input w3-border w3-round"  placeholder="Digite o valor de investimento"/><br>
<label class = "w3-left w3-xlarge w3-section w3-text-indigo" style="font-family:sans-serif; font-weight:bold;">Anúncios visualizados - Tipos: </label><br>
<select name="tipo_vis" class= "w3-container w3-border">
<option value="" disabled selected>Escolha</option>
<option class="w3-select w3-border w3-round">Original</option>
<option class="w3-select w3-border w3-round">Compartilhados</option>
<option class="w3-select w3-border w3-round ">Total</option>
</select>
</br>
<input type ="submit" name= "btncalcular" value = "Calcular" class = "w3-margin-bottom w3-margin-top w3-button w3-hover-gray w3-indigo w3-border w3-border-indigo w3-large w3-center" style="width:50%; font-weight:bold;"/>
</form>
</div>
</div>
</body>
</html>

<!--página de resposta do cálculo "calculadoraAction.php"-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel = "stylesheet" href = "https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    h1, h2, h3, h4, h5, h6  {
      font-weight: bold;
    }
    p{font-weight:bold; font-family:sans-serif}
    </style>
  <title>Resultado</title>
</head>
<body>
<div class="w3-half w3-display-middle w3-center">
<div class="w3-container w3-center w3-padding w3-border w3-sand">
<div class="w3-left">
<a href=calculadora.php class="w3-display-top-left margin-top">
<i class="fa fa-chevron-left w3-large w3-indigo w3-button w3-xxlarge"></i> 
</a> 
</div>

<h1 class="w3-center w3-text-indigo w3-xxlarge margin-left"> Projeção de visualizações</h1>
<h2 class="w3-text-white w3-xlarge w3-indigo w3-padding">
<?php
$tipo = $_POST['tipo_vis'];
$valor1 = $_POST['edtvalor'];
//variárivel para o valor investido (para cada R$1 investido, 30 pessoas visualizam) 
$result_orig = $valor1 * 30;
//variável para os cliques (a cada 100 pessoas que visualizam, 12 clicam = 12%)
$cliques = 0.12;
//variável para os compartilhamentos (a cada 20 pessoas que clicam, 3 compartilham = 15%)
$compart = 0.15;
switch($tipo){
//número de pessoas que visualizam o anúncio original
case 'Original':$resultado = $result_orig; 
echo $english_format_number = number_format($resultado, 2, ',', '')." pessoas visualizaram o anúncio original";
break;
//número de pessoas compartilham
case 'Compartilhados': 
$result1 = (($result_orig * $cliques) * $compart) * 40;
$result2 = (($result1 * $cliques) * $compart) * 40;
$result3 = (($result2 * $cliques) * $compart);
$resultado = $result1 + $result2 + $result3;
echo $english_format_number = number_format($resultado, 2, ',', '')." pessoas visualizaram os compartilhamentos";
break;
case 'Total':
//número de total de compartilhamentos (original+compartilhamentos)
$result1 = (($result_orig * $cliques) * $compart) * 40;
$result2 = (($result1 * $cliques) * $compart) * 40;
$result3 = (($result2 * $cliques) * $compart);
$result4 = $result1 + $result2 + $result3;
$resultado = $result4 + $result_orig;
echo $english_format_number = number_format($resultado, 2, ',', '')." é o número total de visualizações";
break;
}
?>
</h2>
</div>
</div>
</body>
</html>