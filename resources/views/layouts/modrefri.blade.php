
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Producto</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Producto</h1> </span>
  		<br>
	  <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="no" >
  		<label>Id Producto: </label>
  		<input type="text" id="id_producto" name="id_producto" value="01" ><br>
  		
  		<label>Producto: </label>
  		<input type="text" id="producto" name="producto" value="Refrigerador"><br>
  		
  		<label>Descripcion: </label>
  		<textarea style="border-radius: 10px;" rows="3" cols="50" name="descripcion" value="Refrigerador 7 Pies Hisense Plateado"> </textarea><br>
  		
  		<br>
		  
		  <a href="index"> <button type="button" class="btn btn-info">Guardar</button> </a>
</div>
     </form>
  	</div>
  	
  </div>
  


</div>


</body>
</html>