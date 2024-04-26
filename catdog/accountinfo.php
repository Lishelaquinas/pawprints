<?php

session_start();
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'petadoption123');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$username=$_SESSION['username'];

$squery = "SELECT cid, cname,address,custno from customers where username='$username'";

if ($result=mysqli_query($link, $squery)) {

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>cname</th>";
        echo "<th>address</th>";
        echo "<th>Contact</th>";




        echo "</tr>";


        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['cname'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['custno'] . "</td>";
           // echo $row['cid'];
            mysqli_refresh($link,MYSQLI_REFRESH_STATUS);






            $_SESSION['cid']=$row['cid'];

            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else {
        echo "No records matching your query were found.";

    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        div {
            margin-bottom: 15px;
            padding: 4px 12px;
        }

        button {
            background-color:turquoise;
            border: none;
            border-radius: 12px;
            color: white;
            padding: 5px 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left: 250px;
            cursor: pointer;
        }

        table {
            margin-top: 330px;
            margin-left: 450px;
            border-collapse: collapse;
            width: 35%;
        }

        th, td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
            background-color:turquoise;
            color: white;
        }




    </style>
</head>
</html>





