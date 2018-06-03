<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Page Title</title>
		<style>
			p { text-align: left; font-size: 6px; line-height: 100%; }
			p.col { font-size: 70%; font-weight: bold; }
			p.item { font-size: 70%; }
			.title { margin-bottom: 1px; }
			td { font-size: 60%; }
		</style>
	</head>
	<body>
		<h4 style="font-size: 50%; line-height: 50%;">NOMBRE COMITE</h4>
		<table style="text-align: left; padding-bottom: 2px; padding-left: 0px">
			<tbody>
				<tr>
					<td width="25%"><p>Comuna:</p></td>
					<td><p>(nombre comuna)</p></td>
				</tr>
			</tbody>
		</table>
		<h4 style="font-size: 60%; text-align: center; line-height: 200%">
			BOLETA ELECTRONICA N° {{ $boleta->nro_boleta }}
		</h4>
		<p class="col" style="font-size: 5px;">
			FECHA DE EMISIÓN: (fecha)
		</p>
		<h4 style="font-size: 50%; line-height: 50%;">DATOS DEL CLIENTE</h4>
		<table style="text-align: left; padding-bottom: 2px; padding-left: 0px">
			<tbody>
				<tr>
					<td width="25%"><p>Nombre:</p></td>
					<td><p>{{ $boleta->nombre_cliente }}</p></td>
				</tr>
				<tr>
					<td width="25%"><p>Domicilio:</p></td>
					<td><p>{{ $boleta->domicilio }}</p></td>
				</tr>
				<tr>
					<td width="25%"><p>Medidor:</p></td>
					<td><p>{{ $boleta->medidor->num_medidor }}</p></td>
				</tr>
				<tr>
					<td width="25%"><p>Subsidio Cliente:</p></td>
					<td><p>{{ $boleta->subsidio }}%</p></td>
				</tr>
			</tbody>
		</table><br>
		<h4 style="font-size: 50%; line-height: 50%;">DATOS DE LECTURA</h4>
		<table style="text-align: left; padding-bottom: 2px; padding-left: 0px">
			<tbody>
				<tr>
					<td width="25%"><p>Lectura Anterior:</p></td>
					<td><p>{{ $boleta->lectura_anterior }} m3</p></td>
				</tr>
				<tr>
					<td width="25%"><p>Lectura Actual:</p></td>
					<td><p>{{ $boleta->lectura_actual }} m3</p></td>
				</tr>
				<tr>
					<td width="25%"><p>Consumo:</p></td>
					<td><p>{{ $boleta->consumo }} m3</p></td>
				</tr>
			</tbody>
		</table><br>
		<!--<h4 style="font-size: 70%; line-height: 50%;">CARGOS FIJOS</h4>
		<table style="text-align: left; padding-bottom: 2px; padding-left: 0px">
			<tbody>
				<tr>
					<td width="25%"><p>Cargo Fijo:</p></td>
					<td><p>${{ $boleta->cargo_fijo }}</p></td>
				</tr>
				<tr>
					<td width="25%"><p>Alcantarillado:</p></td>
					<td><p>${{ $boleta->alcantarillado }}</p></td>
				</tr>
			</tbody>
		</table>
		<h4 style="font-size: 70%; line-height: 50%;">COBROS</h4>
		<table style="text-align: left; padding-bottom: 2px; padding-left: 0px">
			<tbody>
				<tr>
					<td width="25%"><p>Saldo Anterior:</p></td>
					<td><p>${{ $boleta->saldo }}</p></td>
				</tr>
				<tr>
					<td width="25%"><p>Monto a Pagar:</p></td>
					<td><p>${{ $boleta->monto_pagar }}</p></td>
				</tr>
				<tr>
					<td width="25%"><p>Total a Pagar:</p></td>
					<td><p>${{ $boleta->total }}</p></td>
				</tr>
			</tbody>
		</table>-->
		<br>
		<table style="padding-top: 3px">
			<tbody>
				<tr>
					<td><hr/></td>
				</tr>
			</tbody>
		</table>
		<table style="width: 100%; padding-bottom: 3px">
			<tbody>
				<tr>
					<td width="25%"><p class="col" style="font-size: 4px;">SALDO ANTERIOR</p></td>
					<td width="25%"><p class="col" style="font-size: 4px;">CARGO FIJO</p></td>
					<td width="25%"><p class="col" style="font-size: 4px;">ALCANTARILLADO</p></td>
				</tr>
				<tr>
					<td><p class="item">${{ $boleta->saldo }}</p></td>
					<td><p class="item">${{ $boleta->cargo_fijo }}</p></td>
					<td><p class="item">${{ $boleta->alcantarillado }}</p></td>
				</tr>
			</tbody>
		</table>
		<table style="padding-top: 3px">
			<tbody>
				<tr>
					<td><hr/></td>
				</tr>
			</tbody>
		</table>
		<table style="width: 100%; padding-bottom: 3px">
			<tbody>
				<tr>
					<td width="75%"><p class="col" style="text-align: right">MONTO A PAGAR:</p></td>
					<td width="25%"><p class="item">${{ $boleta->monto_pagar }}</p></td>
				</tr>
				<tr>
					<td><p class="col" style="text-align: right">TOTAL A PAGAR:</p></td>
					<td><p class="item">${{ $boleta->total }}</p></td>
				</tr>
				<br>
				<tr>
					<td width="30%"><p class="col" style="font-size: 5px;">FECHA DE PAGO:</p></td>
					<td><p class="item">{{ $boleta->fecha_pago }}</p></td>
				</tr>
			</tbody>
		</table>
		<table style="padding-top: 3px">
			<tbody>
				<tr>
					<td><hr/></td>
				</tr>
			</tbody>
		</table>
	</body>
</html>
