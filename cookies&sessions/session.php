<?php
session_start();
?>
<?php
$_SESSION["first_name"] = "ramel";
$name = $_SESSION["first_name"];
echo $name;
?>
