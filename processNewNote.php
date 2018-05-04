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

    $noteToAdd=$_POST['Note'];
    echo $noteToAdd;
?>