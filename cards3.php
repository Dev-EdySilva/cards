<!DOCTYPE html>
<html>
<head>
	<title>Cards 3</title>
	<meta charset="utf-8">

	<style type="text/css">
		
	*{margin: 0px; padding: 0px;}

		table{
			width: 100%;
		}

		table tr td{
			padding: 6px;
			background-color: #000;
			background-image: url(images/praia3.jpg);
			background-size: 100% 100%;
		}

		td .label{
			/*background-color: #000;*/
			opacity: .8;
			color: #000;
			margin-bottom: 3.5px;
			padding: 4px;
			font-family: "Ubuntu", sans-serif;
			font-size: 14px;
			color: #fff;
			text-shadow: 2px 1px 3px #000;
			/*font-weight: bold;*/
		}

		.label{
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

		.overlay{
			position: relative;
			z-index: 1;
			float: left;
			width: 100%;
			height: 193px;
			background-color: #000;
			opacity: .8;
			left: 0px;
			/*display: none;*/
			top: 0px;
		}


	</style>

</head>
<body>
<?php 
	$max = 52;
	$rows = ceil($max/3);
	$n = 1;

	$max = 52;
	$rows = ceil($max/3);
	$n = 1;

	$destino = "Barra Nova";
	$valor = "30,00";
 ?>

	<table>
		<?php for($i=0; $i<$rows; $i++): ?>
		<tr>
			<td>
				<div class="conteudo">
					<h2 class="title" style="display: block; width: 100%; float: left;">
						<span style="float: left;width: 30%; text-align: left;">#<?=$n?></span>
						<span style="float: left;width: 70%; text-align: left;">Pic Nic</span>
					</h2>
					<p class="label">
						<label>Destino :</label> <?=$destino?>
					</p>


					<p class="label">
						<label>Data : </label> 01/01/2018
					</p>

					<p class="label">
						<label>Saída :</label> Nilo Campêlo as 06hs 00min
					</p>

					<p class="label">
						<label>Valor :</label> R$ <?=$valor?>
					</p>

					<p class="label">
						<label>Organização :</label> Denira
					</p>

					<p class="label numero" style="text-align: center;">
						<!-- <label><?=$n?></label> -->
					</p>
				</div>
			</td>

			<td>
				<div class="conteudo">
				<h2 class="title" style="display: block; width: 100%; float: left;">
					<span style="float: left;width: 30%; text-align: left;">#<?=++$n?></span>
					<span style="float: left;width: 70%; text-align: left;">Pic Nic</span>
				</h2>
				<p class="label">
					<label>Destino :</label> <?=$destino?>
				</p>


				<p class="label">
					<label>Data : </label> 01/01/2018
				</p>

				<p class="label">
					<label>Saída :</label> Nilo Campêlo as 06hs 00min
				</p>

				<p class="label">
					<label>Valor :</label> R$ <?=$valor?>
				</p>

				<p class="label">
					<label>Organização :</label> Denira
				</p>

				<p class="label numero" style="text-align: center;">
					<!-- <label><?=$n?></label> -->
				</p>
			</div>
			</td>

			<td>
				<div class="conteudo">
				<h2 class="title" style="display: block; width: 100%; float: left;">
					<span style="float: left;width: 30%; text-align: left;">#<?=++$n?></span>
					<span style="float: left;width: 70%; text-align: left;">Pic Nic</span>
				</h2>
				<p class="label">
					<label>Destino :</label> <?=$destino?>
				</p>


				<p class="label">
					<label>Data : </label> 01/01/2018
				</p>

				<p class="label">
					<label>Saída :</label> Nilo Campêlo as 06hs 00min
				</p>

				<p class="label">
					<label>Valor :</label> R$ <?=$valor?>
				</p>

				<p class="label">
					<label>Organização :</label> Denira
				</p>

				<p class="label numero" style="text-align: center;">
					<!-- <label><?=$n?></label> -->
				</p>
			</div>
			</td>

		
			<?php 
				$n++;
			 ?>

	
			

		</tr>
		<?php endfor; ?>

	</table>


</body>
</html>