<?php
header("Content-Type: text/html; charset=iso-8859-1",true);
?>
<html>
<head><title>Times</title></head>
<body>
<center><h3>Times</h3></center>
<form name="form1" method="POST" action="form_incluir.php">
<table border="5" align="center" width="80%">
<?php
include("./config.php");
$con = mysqli_connect($host, $login, $senha, $bd);
$sql = "SELECT * FROM times_info ORDER BY codigo";
$tabela = mysqli_query($con, $sql);
if(mysqli_num_rows($tabela)==0){
?>
  <tr><td align="center">Nao ha nenhum time cadastrado.</td></tr>
  <tr><td align="center"><input type="submit" value="incluir Time"></td></tr>
<?php
}else{
?>
	<tr bgcolor="Silver"><td width="30%">Nome</td><td width="40%">Cidade</td><td align="center" width="16%">Ano de Fundacao</td><td align="center" width="40%">Opcoes</td></tr>
<?php
  while($dados = mysqli_fetch_row($tabela)){
?>
  <tr align="center"><td><?php echo $dados[1]; ?></td>
      <td><?php echo $dados[2]; ?></td>
      <td><?php echo $dados[3]; ?></td>
	  <td colspan="3" align="center">
	    <input type="button" value="Editar" onclick="location.href='form_incluir.php?codigo=<?php echo $dados[0]; ?>'">
        <input type="button" value="Excluir" onclick="location.href='excluir.php?codigo=<?php echo $dados[0]; ?>'">
	  </td>
  </tr>
<?php
  }
?>
<tr bgcolor="Silver"><td colspan="10" height="5"></td></tr>
<?php
mysqli_close($con);
?>
<tr><td colspan="10" align="center"><input type="submit" value="Incluir Novo Time"></td></tr>
<?php
}
?>
</table>
</form>
</body>
</html>
