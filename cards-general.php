<!DOCTYPE html>
<html>
<head>
	<title>Cards General Sampaio</title>
	<meta charset="utf-8">

	<style type="text/css">

	*{margin: 0px; padding: 0px;}

	body{
		background-color: #000;
	}

		table{
			width: 100%;
		}



		table tr td{
			padding: 6px;
			padding-bottom: 70px;
			background-color: #fff;
			background-image: url(images/desfocado.png);
			background-size: 100% 100%;
		}



		/*.conteudo{
			position: relative;
			z-index: 4;
		}*/

		td .label{
			color: #000;
			margin-bottom: 2px;
			padding: 4px;
			font-family: "Ubuntu", sans-serif;
			font-size: 14px;
			text-shadow: 1px 0px 3px #fff;
			/*font-weight: bold;*/
		}

		.label label{
			text-transform: uppercase;
			font-weight: bold;
		}

		td .title{
			text-align: center;
			color: #000;
			padding: 3px;
			font-family: Ubuntu, sans-serif;
			text-shadow: 0px 0px 2px #fff;
			margin-bottom: 8px;
		}


		.numeracao{
			width: 100%;
			text-align: center;
		}

		.label.numero{
			font-size: 20px;
		}


	</style>


	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript">

		$(function(){

			$('.overlay').each(function(){
				var $td = $(this).parent();
				var width = $td.outerWidth(), height = $td.outerHeight();

				$(this).css({
					height : height+'px',
					width : width+'px'
				});

			});

		});

	</script>

</head>
<body>
<?php
	$max = 52;
	$rows = ceil($max/3);
	$n = 1;

	$destino = "Barra do Cauípe";
	$valor = "20,00";
	$data = '29/10/2017';
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
					<label>Data : </label> <?=$data?>
				</p>

				<p class="label">
					<label>Saída :</label> Escola Nilo Campelo as 06hs 00min
				</p>

				<p class="label">
					<label>Valor :</label> R$ <?=$valor?>
				</p>

				<p class="label">
					<label>Organização :</label> Valdenira
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
					<label>Data : </label> <?=$data?>
				</p>

				<p class="label">
					<label>Saída :</label> Escola Nilo Campelo as 06hs 00min
				</p>

				<p class="label">
					<label>Valor :</label> R$ <?=$valor?>
				</p>

				<p class="label">
					<label>Organização :</label> Valdenira
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

				<br>
				<br>
				<p class="label">
					<label>Destino :</label> <?=$destino?>
				</p>


				<p class="label">
					<label>Data : </label> <?=$data?>
				</p>

				<p class="label">
					<label>Saída :</label> Escola Nilo Campelo as 06hs 00min
				</p>

				<p class="label">
					<label>Valor :</label> R$ <?=$valor?>
				</p>

				<p class="label">
					<label>Organização :</label> Valdenira
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
