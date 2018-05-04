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

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("<p>Connection failed: " . mysqli_connect_error() . "</p>");
    }

    $uname=$_SESSION['uname'];

    $noteToAdd=$_POST['Note'];

    $escapedNote=mysqli_real_escape_string($conn,$noteToAdd);
    $sql="INSERT INTO Notes (Username,TimeCreated,Note) VALUES ('$uname',NOW(),'$noteToAdd')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "Well something went wrong";
    }
    else
    {
        header("Location: http://thomasjurczyk.epizy.com/notePage.php");
    }
?>