<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <title>Cadastro de anúncios</title>
</head>
<body>
<div class="w3-half w3-display-middle w3-center w3-border w3-border-indigo w3-light-gray">
<div class="w3-container w3-card-4 w3-center w3-padding w3-light-gray">
<h1 class = "w3-indigo w3-text-white w3-center w3-margin">Cadastro de anúncios</h1>
<form action="cadastroAction.php" name="cadastro" class="w3-container">
<label class="w3-text-indigo" style="font-weight:bold;">Código do Cliente (automático)</label>
<input name="txtID" class="w3-input w3-grey w3-border" disabled><br>
<label class = "w3-left w3-text-indigo" style = "font-weight:bold;">Nome do anúncio:</label><br>
<input type="text" method = "post" name = "edtnome_anun" class="w3-input w3-border w3-round">
<label class = "w3-left w3-text-indigo" style = "font-weight:bold;">Cliente:</label><br>
<input type="text" method = "post" name = "edt_cliente" class=" w3-input w3-border w3-round">
<label class = "w3-left w3-text-indigo" style = "font-weight:bold;">Data de início:</label><br>
<input type="date" method = "post" name = "data_ini" class="w3-input w3-border w3-round">
<label class = "w3-left w3-text-indigo" style = "font-weight:bold;">Data de término:</label><br>
<input type="date" method = "post" name = "data_sai" class="w3-input w3-border w3-round">
<label class = "w3-left w3-text-indigo" style = "font-weight:bold;">Investimento por dia:</label><br>
<input type="number" step="0.01" method = "post" name = "edtvalor" class="w3-input w3-border w3-round w3-margin-bottom">
<input type="submit" name="btnenviar" class="w3-input w3-indigo w3-hover-gray w3-text-white w3-margin-bottom">
</form>
</div> 
</body>
</html>