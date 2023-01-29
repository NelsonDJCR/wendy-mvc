<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Vehículos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
	<div class="container">
		<h2>Vehículos</h2>
		<a href="index.php?c=vehiculos&action=nuevo" class="btn btn-primary">Agregar</a>
		<br />
		<br />
		<div class="table-responsive">
			<table border="1" width="80%" class="table">
				<thead>
					<tr class="table table-dark">
						<th>Placa</th>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Año</th>
						<th>Color</th>
						<th style="width: 200px;">Acciones</th>
					</tr>
				</thead>
				<tbody></tbody>
			</table>
		</div>
	</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	$(document).ready(function() {
		$.ajax({
			type: "GET",
			url: 'http://localhost/mvc-php/mvc/index.php?action=getData',
			success: function(response) {
				const json = JSON.parse(response);
				table = $('tbody')
				table.html(``)
				console.log(json);
				$.each(json, function(key, i) {
					table.append(`
					    <tr>
							<td>${i.placa}</td>
							<td>${i.marca}</td>
							<td>${i.modelo}</td>
							<td>${i.anio}</td>
							<td>${i.color}</td>
							<td><a href='index.php?action=modificar&id=${i.id}' class='btn btn-warning'>Modificar</a><a href='index.php?action=eliminar&id=${i.id}' class='btn btn-danger'>Eliminar</a></td>
						</tr>";
						`)
				})
			},
		});
	});
</script>

</html>