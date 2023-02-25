<?php
  include("./config.php");
  $con = mysqli_connect($host, $login, $senha, $bd);
  if(isset($_POST["codigo"])){
    $sql = "SELECT codigo FROM times_info WHERE codigo=".$_POST["codigo"];
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)!=0){
      $sql = "UPDATE times_info SET nome='".$_POST["nome"]."',cidade='".$_POST["cidade"]."',ano_fundacao=".$_POST["ano_fundacao"]." WHERE codigo=".$_POST["codigo"];
    }
  }else{
    $sql = "INSERT INTO times_info VALUES (null,'".$_POST["nome"]."','".$_POST["cidade"]."',".$_POST["ano_fundacao"].")";
  }
  mysqli_query($con, $sql);
  mysqli_close($con);
  header("location: ./index.php");
?>