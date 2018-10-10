<?php
	$formatos   = array('.doc','.txt');
	$directorio = 'archivos'; 
	if (isset($_POST['boton'])){
		$nombreArchivo    = $_FILES['archivo']['name'];
		$nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
		$ext              = substr($nombreArchivo, strrpos($nombreArchivo, '.'));
        
		if (in_array($ext, $formatos)){
			if (move_uploaded_file($nombreTmpArchivo, "$directorio/$nombreArchivo")){
				echo "Felicitaciones, archivo $nombreArchivo subido exitosamente";
			}else{
				echo 'Ocurrió un error subiendo el archivo, valida los permisos de la carpeta "archivos"';
			}
		}else{
			echo 'Error: Extencion no valido';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lenguajes y Automatas</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
			
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<style type="text/css">
        #cajaTxt{
            background: #000;
            color: #fff;
        }
    </style>
</head>
<body>
	<div class="container mt-3">
	

		<h1>Selecciona tu archivo</h1>
		<form method="post" action="" enctype="multipart/form-data">
			<div class="form-group">
				<label for="archvio">Archivo</label>
				<input type="file" class="form-control-file" id="archvio" aria-describedby="fileHelp" name="archivo">
				<small id="fileHelp" class="form-text text-muted">Solo archivos .txt</small>
			</div>
			<div class="12u$">
			<ul class="actions" style="text-align: center">
			<button type="submit" class="btn btn-primary" name="boton">Subir archivo</button>
			</ul>
			</div>									
		</form>
		
		
	</div>
	
				<!-- Main -->
						<section class="wrapper style5">
							<div class="inner">
								<section>
									<form method="post" id="formulariotxt" action="#">
<textarea ID="area" COLS=20 ROWS=10>
<?php        
if(isset($_POST['boton'])){
$prueba=fopen("archivos/$nombreArchivo","r") or die ("error al leer");
while(!feof($prueba)){
$linea=fgets($prueba);  
echo $linea;
}
fclose($prueba);
}else{
$archivoBlanco=fopen("archivos/blanco.txt","r") or die ("error al leer blanco");
while(!feof($archivoBlanco)){
$linea=fgets($archivoBlanco);  
echo $linea;
}
fclose($archivoBlanco);
}
?>
</textarea>
                                                <br>										
                                                <br>										
                                                <br>										
																												
										<div class="table-wrapper">
											<table id="tabla1">
												<thead>
													<tr>
														<th>a) Encontrar palabras similares.</th>
													</tr>
												</thead>
												<tbody id="content_table">
													<tr>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
                                         
                                         
                                         
                                         
                                          <div class="12u$">
											<ul class="actions" style="text-align: center">
												<li><input type="button" value="Mostrar" class="principal" id="add_row" onclick="disabled=true" disabled/></li>
											</ul>
										</div>
                                        <br>
                                        <div class="table-wrapper2">
											<table id="tabla2">
												<thead>
													<tr>
														<th>b) Eliminar palabras repetidas seguidas.</th>
													</tr>
												</thead>
												<tbody id="content_table">
													<tr>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
                                        <div class="12u$">
											<ul class="actions" style="text-align: center">
												<li><input type="button" value="Mostrar" class="principal" id="add_row2" onclick="disabled=true"/></li>
											</ul>
										</div>
                                        <br>
                                        <div class="table-wrapper3">
											<table id="tabla3">
												<thead>
													<tr>
														<th>c) Buscar una palabra específica y reemplazar todas sus apariciones.</th>
													</tr>
												</thead>
												<tbody id="content_table">
													<tr>
														<td></td>
													</tr>
												</tbody>
											</table>
											<br>
											<input type="text" id="buscar" placeholder="Buscar">
				                            <br>
								            <input type="text" id="remplanzar" placeholder="Remplanzar">
								            <br><br>
										</div>
                                       
                                        <div class="12u$">
											<ul class="actions" style="text-align: center">
												<li><input type="button" value="Mostrar" class="principal" id="add_row3" onclick="disabled=true"/></li>
											</ul>
										</div>
                                        <br>
                                        <div class="table-wrappe4">
											<table id="tabla4">
												<thead>
													<tr>
														<th>d) Convertir las palabras de mayúsculas a minúsculas y viceversa.</th>
													</tr>
												</thead>
												<tbody id="content_table">
													<tr>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
                                        <div class="12u$">
											<ul class="actions" style="text-align: center">
												<li><input type="button" value="mayusculas" class="principal" id="add_row4" onclick="disabled=true"/></li>
											</ul>
										</div>
                                      <div class="table-wrappe42">
											<table id="tabla42">
												<tbody id="content_table">
													<tr>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
                                       <div class="12u$">
											<ul class="actions" style="text-align: center">
												<li><input type="button" value="minusculas" class="principal" id="add_row42" onclick="disabled=true"/></li>
											</ul>
										</div>
                                        <br>
                                        
                                        <div class="table-wrappe5">
											<table id="tabla5">
												<thead>
													<tr>
														<th>e) Encontrar una expresión matemática como fórmulas.</th>
													</tr>
												</thead>
												<tbody id="content_table">
													<tr>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
                                        <div class="12u$">
											<ul class="actions" style="text-align: center">
												<li><input type="button" value="Mostrar" class="principal" id="add_row5" onclick="disabled=true"/></li>
											</ul>
										</div>
                                        <br>
                                        <br>									

									</form>
								</section>
							</div>
						</section>
                     <!-- integrantes -->
                <div id="integrantes">
					<footer id="footer">
						<ul class="copyright">
                            <li><h4>Integrantes:</h4></li>
                            <li>Jesus Alberto Medina Dzib</li>
                            <li>Karina Chiguil Euan</li>
                            <li>Omar Ake Bellos</li>
                            <li>Rogelio Canche Canche</li>
                        </ul>
					</footer>
                </div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="lib/js/ejercicioa.js"></script>
			<script src="lib/js/ejerciciob.js"></script>
			<script src="lib/js/ejercicioc.js"></script>
			<script src="lib/js/mayusculas.js"></script>
			<script src="lib/js/minusculas.js"></script>
			<script src="lib/js/ejercicioe.js"></script>
			

	</body>
</html>