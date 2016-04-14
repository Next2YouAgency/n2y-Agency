<?php // Verifica se existe a variável txtnome 
if (isset($_GET["txtnome"])) {
$nome = $_GET["txtnome"];
// Conexao com o banco de dados 
include 'conection.php';
// Verifica se a variável está vazia 
if (empty($nome)){
	$sql = "SELECT * FROM contato";
} else {
	$nome .= "%";
	$sql = "SELECT * FROM contato WHERE nome like '$nome'";
}
sleep(1);
$result = mysql_query($sql);
$cont = mysql_affected_rows($conection);
// Verifica se a consulta retornou linhas
if ($cont > 0) {
	// Atribui o código HTML para montar uma tabela 
	?>
		<table border='1'>
			<thead>
				<tr>
					<th>NOME</th>
					<th>TELEFONE</th>
					<th>CELULAR</th>
					<th>EMAIL</th>
				</tr>
			</thead>
		<tbody>
	<?php
	// Captura os dados da consulta e inseri na tabela HTML 
	while ($linha = mysql_fetch_array($result)) {
		$nomeBuscado	=	$linha['nome'];
		$TelBuscado		=	$linha['fone'];
		$celBuscado		=	$linha['celular'];
		$emailBuscado	=	$linha['email'];
		?>
		<tr>
			<td><?php echo $nomeBuscado ?></td>
			<td><?php echo $TelBuscado ?></td>
			<td><?php echo $celBuscado ?></td>
			<td><?php echo $emailBuscado ?></td>
		</tr>
		<?php
	} echo "
		</tbody>
		</table>
	";
} else {
	// Se a consulta não retornar nenhum valor, exibir mensagem para o usuário
	echo "Não foram encontrados registros!";
	}
}
?>