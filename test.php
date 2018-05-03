<?php

session_start();

<<<<<<< HEAD

$_SESSION["rows"] = array("one", "two", "three");

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
header("Location: http://thomasjurczyk.epizy.com/notePage.php");
=======
$rows = [1, 2, 3];
$_SESSION['rows'][] = $rows;

header("Location: http://thomasjurczyk.epizy.com/notePage.html");
>>>>>>> 3273257d35f343749f67a597116635575fa8938a

?>