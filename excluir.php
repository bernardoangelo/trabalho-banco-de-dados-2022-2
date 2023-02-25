<?php
include("./config.php");
$con = mysqli_connect($host, $login, $senha, $bd);
$sql = "DELETE FROM times_info WHERE codigo=".$_GET["codigo"];
mysqli_query($con, $sql);
header("location: ./index.php");
?>