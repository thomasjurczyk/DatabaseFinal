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

    $updateDate=$_SESSION['updateDate'];
    $updatedNote=$_POST['Note'];
    $_SESSION['updateDate']=null;

    if($updateDate==null||$updatedNote==null)
    {
        header("Location: http://thomasjurczyk.epizy.com/notePage.php");
    }

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("<p>Connection failed: " . mysqli_connect_error() . "</p>");
    }

    $escapedNote=mysqli_real_escape_string($conn,$updatedNote);
    $sql = "UPDATE Notes SET Note='$escapedNote' WHERE timeCreated=\"$updateDate\"";

    mysqli_query($conn,$sql);
    if(!mysqli_query($conn,$sql))
    {
        echo "Update failed!";
    }
    else
    {
        header("Location: http://thomasjurczyk.epizy.com/readNotes.php");
    }
?>