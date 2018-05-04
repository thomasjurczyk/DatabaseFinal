<?php
$servername = "sql301.epizy.com";  // server is listed with database in control panel.
$username = "epiz_21487047"; // user name is provided with Account Information on hosting page.
$password = "fPnWEWthqmFx";  // password is the one provided with Account Information. It is not login password.
$dbname = "epiz_21487047_databasefinaldatabase";  // database name is listed with database in control panel


session_start();

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<p>Connection failed: " . $conn->connect_error . "</p>");
}

$unameInput=htmlspecialchars($_POST["uname"]);

$sql = "SELECT * FROM LoginInfo WHERE Username=\"$unameInput\"";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

$_SESSION['uname'] = $unameInput;
header("Location: http://thomasjurczyk.epizy.com/readNotes.php");
}
else
{
    header("Location: http://thomasjurczyk.epizy.com/login.html");
}
?>