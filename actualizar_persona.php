<?php
include('includes/db.php');
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$id=(int)$_POST["id"];
$sql="UPDATE `personas`.`persona` SET `nombre`='$nombre',`email`='$email'  WHERE  `id`='$id';";
DB::query($sql);
header("location: index.php");
?>