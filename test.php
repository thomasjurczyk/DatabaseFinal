<?php

session_start();


$_SESSION["rows"] = array("one", "two", "three");

header("Location: http://thomasjurczyk.epizy.com/notePage.php");

?>