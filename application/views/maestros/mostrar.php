<!DOCTYPE html>
<html>
<head>
	<title>Mostrar</title>
	<meta charset="utf-8">
	<link  href="/extras/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link  href="/extras/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
	<link  href="/extras/css/jquery.dataTables.min.css">

	<script type="text/javascript" src="/extras/DataTables/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/extras/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="/extras/js/jquery.form-validator.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#image').change(function(){
				$('#preview').html('');
				//auxiliares
				$('#preview').html('<img src="/extras/imagenes/chosen.jpeg">');

				var id = $(this).data('id');

				
			});
		});
	</script>

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">

				<h1 id="legend">
						Maestro 
				</h1>
						<br><br>

				<?php echo form_open_multipart('', array('class'=>'form-horizontal', 'name'=>'alumnoAjax','id'=>'alumnoAjax')); ?>
				<fieldset>

					
						<?php 
						echo '<div id="preview" style="width:100px;"></div>' ;

						echo '<label id="imageErrorLabel" class="error"></div>';

						echo form_upload(array('data-id'=>$objAlumno->id, 'name'=>'image' ,'id'=>'image'));
						?>
					
					<div class="form-group">
						<label for="nombre">Nombre:</label>
						<div class="controls">
							<?php 
									echo $objAlumno->nombre;
							 ?>
							 <div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="apellido">Apellidos:</label>
						<div class="controls">
							<?php 
									
									echo $objAlumno->apellido;
							 ?>
						</div>
					</div>

					<div class="form-group">
						<label for="fecha">Fecha de Nacimiento:</label>
						<div class="controls">
							<?php 
			
									echo $objAlumno->fecha;
							 ?>
						</div>
					</div>

						<a class="btn btn-default" href="<?php echo base_url('alumnocontroller/index') ?>">Regresar</a>

				</fieldset>
				
			</div>
		</div>
	</div>
	
</body>
</html>