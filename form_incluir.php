<?php
header("Content-Type: text/html; charset=iso-8859-1",true);
?>
<html>
<head><title>Incluir/Editar um time</title></head>
<body>
<form name="form1" method="POST" action="incluir.php">
<?php
if(isset($_GET["codigo"])){	
  include("./config.php");
  $con = mysqli_connect($host, $login, $senha, $bd);
?>
  <center><h3>Editar Time</h3></center>
<?php
  $sql = "SELECT * FROM times_info WHERE codigo=".$_GET['codigo'];
  $result = mysqli_query($con, $sql);
  $vetor = mysqli_fetch_array($result, MYSQLI_ASSOC);
  mysqli_close($con);
?>
  <input type="hidden" name="codigo" value="<?php echo $_GET['codigo']; ?>">
<?php
}else{
?>
  <center><h3>Cadastrar Novo Time</h3></center>
<?php
}
?>
<table border="5" align="center" width="35%">
<tr><td width="20%">Time:</td>
    <td colspan="2" width="90%">
	  <input type="text" name="nome" value="<?php echo @$vetor['nome']; ?>" maxlength="57" size="41">
	</td>
</tr>
<tr><td>Cidade:</td>
    <td><input type="text" name="cidade" value="<?php echo @$vetor['cidade']; ?>" maxlength="54" size="41">
    </td>
</tr>
<tr><td width="28%">Ano de Fundacao:</td>
    <td><input type="int" name="ano_fundacao" value="<?php echo @$vetor['ano_fundacao']; ?>" maxlength="4" size="41">
    </td>
</tr>
<tr><td colspan="3" align="center">
      <input type="button" value="Cancelar" onclick="location.href='index.php'">
      <input type="submit" value="Gravar">
    </td>
</tr>
</table>
</form>
</body>
</html>