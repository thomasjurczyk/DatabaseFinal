<?php
$servername = "sql301.epizy.com";  // server is listed with database in control panel.
$username = "epiz_21487047"; // user name is provided with Account Information on hosting page.
$password = "fPnWEWthqmFx";  // password is the one provided with Account Information. It is not login password.
$dbname = "epiz_21487047_databasefinaldatabase";  // database name is listed with database in control panel




echo <<<EOT
<link rel="stylesheet" type="text/css" href="readNoteStyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



EOT;
session_start();
if($_SESSION['uname']==null)
{
    header("Location: http://thomasjurczyk.epizy.com/login.html");
}
$_SESSION['holder'];

$uname=$_SESSION['uname'];



$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("<p>Connection failed: " . mysqli_connect_error() . "</p>");
}
$sql = "SELECT * FROM Notes WHERE Username=\"$uname\" ORDER BY TimeCreated DESC";
$result = mysqli_query($conn,$sql);
$row_cnt = $result->num_rows;

if (mysqli_num_rows($result) > 0) {
    $resultArray=array();
    while($row = mysqli_fetch_assoc($result)) {
        array_push($resultArray,array("Username"=>$row["Username"],"TimeCreated"=>$row["TimeCreated"],"Note"=>$row["Note"]));
    }
    $_SESSION["AllNotes"]=$resultArray;
    echo "<h1 style=\"padding-bottom: 40px; font-size: 40px;\">Notes</h1>";
    echo "<form style=\"padding-bottom: 40px; border-radius: 5px;\" id=\"addNote\" action=\"addNote.html\" method=\"post\"><input class=\"button\" type=\"hidden\" name=\"key\"><input type=\"submit\" value=\"ADD\"></form>";
for ($x = 0; $x <= $row_cnt - 1; $x++) {
    echo "<div class=\"container-fluid noteContainer\">";
    echo $_SESSION["AllNotes"][$x]["Note"];

    $tempDate=$_SESSION["AllNotes"][$x]["TimeCreated"];


    echo "</div>";
    echo "<div class=\"container-fluid timeContainer\">";

    echo "<form style=\"padding-bottom: 0px; margin-bottom: 2px; padding-top: 10px;\" action=\"handleDelete.php\" method=\"post\"><input class=\"button\" type=\"hidden\" name=\"key\" value=\"$tempDate\"><input type=\"submit\" value=\"DELETE\"></form>";

        echo "<form action=\"handleUpdate.php\" method=\"post\"><input class=\"button\" type=\"hidden\" name=\"key\" value=\"$tempDate\"><input type=\"submit\" value=\"UPDATE\"></form>";

    echo "</div>";
    echo "<br>";
    }
    }
    else
{
    $_SESSION['notes']=null;
    echo "<p>No notes</p>";
            echo "<form action=\"addNote.html\" method=\"post\"><input class=\"button\" type=\"hidden\" name=\"key\"><input type=\"submit\" value=\"ADD\"></form>";
}
?>
