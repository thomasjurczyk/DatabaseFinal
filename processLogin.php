<?php
$servername = "sql301.epizy.com";  // server is listed with database in control panel.
$username = "epiz_21487047"; // user name is provided with Account Information on hosting page.
$password = "fPnWEWthqmFx";  // password is the one provided with Account Information. It is not login password.
$dbname = "epiz_21487047_databasefinaldatabase";  // database name is listed with database in control panel

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("<p>Connection failed: " . $conn->connect_error . "</p>");
}

$unameInput=htmlspecialchars($_POST["uname"]);

$sql = "SELECT * FROM LoginInfo WHERE Username=$unameInput";
$result = $conn->query($sql);

if($result==null)
{
    echo "<h1>Could not find username<br>Sending you back to the login page in 10 seconds</h1>";
    sleep(10);
    header("Location:http://thomasjurczyk.epizy.com/login.html");
    die();
}
else
{
    echo "<h1>Authenticated!</h1>";
}
?>