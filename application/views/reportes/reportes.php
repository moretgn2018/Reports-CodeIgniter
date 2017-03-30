<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if($reportes){
			foreach ($reportes->result() as $reporte) { ?>
		
			<ul>
				<li><?= $reporte->id ?></li>
				<li><?= $reporte->titulo ?></li>
				<li><?= $reporte->contenido ?></li>
				<li><?= $reporte->area ?></li>
			</ul>
			<?php } ?>
	<?php
		}else{
			 echo 'Ese reporte no existe';
		}
	?>
</body>
</html>