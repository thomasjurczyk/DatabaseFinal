<?php
$servername = "sql301.epizy.com";  // server is listed with database in control panel.
$username = "epiz_21487047"; // user name is provided with Account Information on hosting page.
$password = "fPnWEWthqmFx";  // password is the one provided with Account Information. It is not login password.
$dbname = "epiz_21487047_databasefinaldatabase";  // database name is listed with database in control panel


session_start();
if($_SESSION['uname']==null)
{
    header("Location: http://thomasjurczyk.epizy.com/login.html");
}

$uname=$_SESSION['uname'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("<p>Connection failed: " . mysqli_connect_error() . "</p>");
}
$sql = "SELECT * FROM Notes WHERE Username=\"$uname\"";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    $resultArray=array();
    while($row = mysqli_fetch_assoc($result)) {
        array_push($resultArray,array("Username"=>$row["Username"],"TimeCreated"=>$row["TimeCreated"],"Note"=>$row["Note"]));
    }
    $_SESSION["AllNotes"]=$resultArray;
    echo $_SESSION["AllNotes"][0]["Note"];
}
else
{
    $_SESSION['notes']=null;
    echo "<p>No notes</p>";
}
?>