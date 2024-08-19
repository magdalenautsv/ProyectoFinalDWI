<?php
session_start();
require_once("Producto.php");
if (isset($_POST["nombre"])) {
	//print_r($_POST);exit;
	$u = new usuarios();
	$u->insertarDatos();
	header("Location: index.php?m=1");
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>..:: Listado de Productos ::..</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap5/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap5/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap5/css/bootstrap-theme.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../bootstrap5/css/magda.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body>
	<div class="container">
		<h1>
			<ol class="breadcrumb">
				<li><a href="index.php">Regresar</a></li>
				<li class="active">Agregar</li>
			</ol>
		</h1>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="panel-title">Agregar Producto</h2>
			</div>
			<div class="panel-body">
				<form name="form" action="" method="post">
					<input type="hidden" name="idusuario" value="<?php echo $_SESSION["idUser"] ?>">
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fa fa-user bigicon"></i></div>
							</div>
							<input id="nombre" name="nombre" type="text" placeholder="Nombre del Producto" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fa fa-user bigicon"></i></div>
							</div>
							<input id="descripcion" name="descripcion" type="text" placeholder="Ingresar Descripcion Producto" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fa fa-user bigicon"></i></div>
							</div>
							<input id="cantidad" name="cantidad" type="text" placeholder="Cantidad Productos" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<div class="input-group-text"><i class="fa fa-user bigicon"></i></div>
							</div>
							<input id="precio" name="precio" type="text" placeholder="Ingresar Precio" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<div class="d-grid gap-4 col-6  mx-auto">
							<button type="submit" class="btn btn-primary btn-lg"><h2>Guardar Producto</h2></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="../bootstrap5/js/jquery-1.10.2.js"></script>
	<script src="../bootstrap5/js/bootstrap.min.js"></script>

	<script src="../bootstrap5/js/modernizr-custom.js"></script>
	<script src="../bootstrap5/js/polyfiller.js"></script>
	<script>
		webshims.setOptions('waitReady', false);
		webshims.setOptions('forms-ext', {
			types: 'date'
		});
		webshims.polyfill('forms forms-ext');
	</script>
</body>

</html>