<?php 
session_start();
$_SESSION['dateToDelete']=$_POST['key'];

header("Location: http://thomasjurczyk.epizy.com/deleteNote.php");
?>