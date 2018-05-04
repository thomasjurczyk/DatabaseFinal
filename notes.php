<?php
session_start();
echo $_SESSION['uname'];
$_SESSION['updateDate']="2018-05-04 00:22:20";
echo "<br><a href=\"updateNote.php\">This is a link to test if the updateNote page is working!</a>";
?>