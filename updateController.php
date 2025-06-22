<?php
include "functions.php";
updateInfo($_POST['full_name'], $_POST['birth_date'], $_POST['address'], $_POST['phone']);
header("Location:index.php");
?>