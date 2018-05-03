<?php

<<<<<<< HEAD
=======
// http://php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc
// http://php.net/manual/en/control-structures.foreach.php
// http://php.net/manual/en/language.operators.string.php
// https://www.w3schools.com/php/php_arrays.asp
// http://php.net/manual/en/language.types.array.php
// http://php.net/manual/en/function.array-push.php
// http://kb.ifastnet.com/index.php?/article/AA-00207/34/Free-Hosting/Page-errors-Misc/blank-white-page-500-error.html
// https://www.w3schools.com/html/html_tables.asp
>>>>>>> d8149d010647d6ab4ed71e5d1d7017cf45ffa603

// connect to DBMS
$servername = "sql301.epizy.com";  // server is listed with database in control panel.
$username = "epiz_21487047"; // user name is provided with Account Information on hosting page.
$password = "fPnWEWthqmFx";  // password is the one provided with Account Information. It is not login password.
$dbname = "epiz_21487047_databasefinaldatabase";  // database name is listed with database in control panel

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p>Connection failed: " . $conn->connect_error . "</p>");
}

<<<<<<< HEAD
?>
=======
?>



<!DOCTYPE html>
<html>
<head>
<title>Users</title>
</head>
<body>
$body
</body>
</html>
EOT;

	return $html;
}
>>>>>>> d8149d010647d6ab4ed71e5d1d7017cf45ffa603
