<?php
$servername = "sql301.epizy.com";  // server is listed with database in control panel.
$username = "epiz_21487047"; // user name is provided with Account Information on hosting page.
$password = "fPnWEWthqmFx";  // password is the one provided with Account Information. It is not login password.
$dbname = "epiz_21487047_databasefinaldatabase";  // database name is listed with database in control panel

echo <<<EOT
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

EOT;
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
$row_cnt = $result->num_rows;

if (mysqli_num_rows($result) > 0) {
    $resultArray=array();
    while($row = mysqli_fetch_assoc($result)) {
        array_push($resultArray,array("Username"=>$row["Username"],"TimeCreated"=>$row["TimeCreated"],"Note"=>$row["Note"]));
    }
    $_SESSION["AllNotes"]=$resultArray;
for ($x = 0; $x <= $row_cnt; $x++) {
    echo "<div class=\"container-fluid noteContainer\">";
    echo $_SESSION["AllNotes"][$x]["Note"];
    echo "</div>";
    echo "<div class=\"container-fluid timeContainer\">";
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][0];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][1];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][2];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][3];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][4];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][5];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][6];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][7];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][8];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][9];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][10];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][11];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][12];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][13];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][14];
    echo $_SESSION["AllNotes"][$x]["TimeCreated"][15];
    echo "</div>";
    echo "<br>";
    }
    }
    else
{
    $_SESSION['notes']=null;
    echo "<p>No notes</p>";
}



?>
