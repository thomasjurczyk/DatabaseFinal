<?php

session_start();

$rows = [1, 2, 3];
$_SESSION['rows'][] = $rows;

header("Location: http://thomasjurczyk.epizy.com/notePage.html");

?>