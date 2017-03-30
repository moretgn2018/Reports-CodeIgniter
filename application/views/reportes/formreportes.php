<!DOCTYPE html>
<html>
<head>
	<title>Crear reporte</title>
</head>
<body>
	<?= form_open("/reportes/recibirDatos"); ?>

	<?php

		$id = array(
			'name' => 'id',
			'type' => 'text',
			'placeholder' => 'Id',
			'required' => 'true'
			);

		$titulo = array(
			'name' => 'titulo',
			'type' => 'text',
			'placeholder' => 'Titulo',
			'required' => 'true'
			);

		$desc = array(
			'name' => 'desc',
			'rows' => '5',
			'cols' => '20',
			'placeholder' => 'Escribe la descripción del reporte aquí',
			'required' => 'true'
			);

		$area = array(
			'name' => 'area',
			'type' => 'text',
			'placeholder' => 'Area',
			'required' => 'true'
			);

	?>

	<?= form_label('Id', 'id') ?>
	<?= form_input($id) ?>
	<br>
	<br>
	<?= form_label('Titulo', 'titulo') ?>
	<?= form_input($titulo) ?>
	<br>
	<br>
	<?= form_label('Descripción', 'desc') ?>
	<?= form_textarea($desc) ?>
	<br>
	<br>
	<?= form_label('Area', 'area') ?>
	<?= form_input($area) ?>
	<br>
	<br>
	<?= form_submit('', 'Agregar'); ?>

	<?= form_close(); ?>
</body>
</html>