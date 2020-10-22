<!DOCTYPE html>

<html lang="pt-BR">
	
	<head>
		<script type = "text/javascript" src = "js/calculo.js"> 
		</script>
		<link rel = "stylesheet" href = "css/estilo.css">
	</head>
	<body>
		<table name = "calc" class = "calculadora">
			<tr>
				<th colspan = "4">
					<input type = "text" name = "visor" id = "visor"/>
				</th>
			</tr>
			<tr>
				<td>
					<input type = "button" value ="(" onclick="botao(value);" class="botoes" /></td>
				<td>
					<input type = "button" value =")" onclick="botao(value);" class="botoes" /></td>
				<td>
					<input type = "button" value ="%" onclick="botao('/100');" class="botoes" /></td>
				<td>
					<input type = "button" value ="AC" onclick="limpar(value);" class="botaoAc" /></td>
			</tr>
			<tr>
				<td>
					<input type ="button" value="7" onclick="botao(value);" class="b1" /></td> 
				<td>
					<input type ="button" value="8" onclick="botao(value);" class="b1" /></td>
				<td>
					<input type ="button" value="9" onclick="botao(value);" class="b1" /></td>
				<td>
					<input type ="button" value="/" onclick="botao(value);" class="botoes" /></td>
			</tr>
			
			<tr>
				<td>
					<input type="button" value="4" onclick="botao(value);" class="b1"/></td>
				<td>
					<input type="button" value="5" onclick="botao(value);" class="b1"/></td>
				<td>
					<input type="button" value="6" onclick="botao(value);" class="b1"/></td>
				<td>
					<input type="button" value="*" onclick="botao(value);" class="botoes"/></td>
			</tr>
			<tr>
				<td>
					<input type="button" value="1" onclick="botao(value);" class="b1"/></td>
				<td>
					<input type="button" value="2" onclick="botao(value);" class="b1"/></td>
				<td>
					<input type="button" value="3" onclick="botao(value);" class="b1"/></td>
				<td>
					<input type="button" value="-" onclick="botao(value);" class="botoes"/></td>
			</tr>
			
			<tr>
				<td>
					<input type="button" value="0" onclick="botao(value);" class="b1"/></td>
				<td>
					<input type="button" value="." onclick="botao(value);" class="b1"/></td>
				<td>
					<input type="button" value="=" onclick="calcula(value);" id="bigual"/></td>
				<td>
					<input type="button" value="+" onclick="botao(value);" class="botoes"/></td>
			</tr>
		</table>
	</body>
</html>