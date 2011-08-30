<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Conoce tu numero</title>
<!-- JavaScript -->
<script type="text/javascript" src="scripts/wufoo.js"></script>

<!-- CSS -->
<link href="css/form.css" rel="stylesheet" type="text/css" />
<link href="css/structure.css" rel="stylesheet" type="text/css" />
<link href="css/theme.css" rel="stylesheet" type="text/css" />
</head>

<body id="public">
<div id="container">
<form class="wufoo" action="" method="">
<div class="info">
	<h2>Conoce tu número</h2>
	<div>Ingresa tus datos para conocer tu número</div>
	</div>
    
    <ul>

	<li class="section first">
		<h3>Datos personales</h3>
		<div>Es necesario rellenar todos los campos correctamente.</div>
	</li>
    
    <li>
	<label class="desc">Tu nombre:</label>
		<div>
		<input class="field text large" type="text" maxlength="255" value="Escribe aqui tu nombre."/> 
		</div>
	</li>
    
    <li>
	<label class="desc">Sexo</label>
		<div>
		<span><input id="MasculinoChoice" name="sexo" class="field radio" type="radio" value="Masculino" checked="checked" />
		<label class="choice" for="MasculinoChoice">Masculino</label></span>

		<span><input id="FemeninoChoice" name="sexo" class="field radio" type="radio" value="Femenino"/>
		<label class="choice" for="FemeninoChoice">Femenino</label></span>
		</div>
	</li>
    
    <li>
	<label class="desc">Edad:</label>
		<div>
		<input class="field text small" type="text" maxlength="255" value=""/> 
		</div>
	</li>
    
    <!--
    <li>
	<label class="desc">Monto deseado:</label>
		<div>
		<input class="field text medium" type="text" maxlength="255" value="Monto de pension deseado."/> 
		</div>
	</li>
    -->
    
    <li>
	<label class="desc">Monto deseado:</label>
		<span class="symbol">
		&#36;
		</span>
	
		<span>
		<input class="field text currency" type="text" size="10" value=""/> .
		<label>Pesos</label>
		</span>
	</li>
    
    <li class="buttons">
		<input id="saveForm" class="btTxt" type="submit" value="Calcular" />
	</li>
    
    </ul>
</form>
</div><!--container-->
</body>
</html>