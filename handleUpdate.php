<?php 
session_start();
$_SESSION['updateDate']=$_POST['key'];

header("Location: http://thomasjurczyk.epizy.com/updateNote.php");
?>