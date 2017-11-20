<!DOCTYPE html>
<html>
<head>
	<title>Cards 2</title>
	<meta charset="utf-8">

	<style type="text/css">
		
	*{margin: 0px; padding: 0px;}

		table{
			width: 100%;
		}

		table tr td{
			padding: 6px;
			background-color: teal;
			background-image: url(images/praia2.jpg);
			background-size: 100% 100%;
		}

		td .label{
			background-color: #000;
			opacity: .8;
			color: #fff;
			margin-bottom: 5px;
			padding: 4px;
			font-family: "Ubuntu", sans-serif;
			font-size: 14px;
			/*font-weight: bold;*/
		}

		.label label{
			text-transform: uppercase;
			font-weight: bold;
		}

		td .title{
			text-align: center;
			color: #fff;
			padding: 3px;
			font-family: Ubuntu, sans-serif;
			text-shadow: 0px 0px 3px #000;
			margin-bottom: 8px;
		}


		.numeracao{
			width: 100%;
			text-align: center;
		}


	</style>

</head>
<body>
<?php 
	$max = 52;
	$rows = ceil($max/3);
	$n = 1;
	$data  = [
		'organizacao' => 'Denira',
		'valor' => '30,00',
		'destino' => 'Barra Nova',
		'saida' => 'Escola Nilo Campêlo',
		'horario_saida' => '06hs 00min'
	];
 ?>

	<table>
		<?php for($i=0; $i<$rows; $i++):
		 ?>
		<tr>
			<?php for($j=0; $j<3; $j++): ?>
			<td>
				<h2 class="title">Pic Nic</h2>
				<p class="label">
					<label>Destino :</label> <?=$data['destino']?>
				</p>

				<p class="label">
					<label>Saída :</label> <?=$data['saida']?> as <?=$data['horario_saida']?>
				</p>

				<p class="label">
					<label>Valor :</label> R$ <?=$data['valor']?>
				</p>

				<p class="label">
					<label>Organização :</label> Valdenira
				</p>

				<p class="label" style="text-align: center;">
					<label><?=$n?></label>
				</p>
			</td>
				<?php endfor; ?>
		
			<?php 
				$n++;
			 ?>

	
			

		</tr>
		<?php endfor; ?>

	</table>


</body>
</html>