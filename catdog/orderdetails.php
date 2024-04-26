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
$cid = $_SESSION['cid'];
//echo $cid;
echo  "YOUR DETAILS ARE";




$sql1="SELECT p.pname,o.total_price,o.orderid from pet_details p ,order_details o where p.pid=o.pid and o.cid=$cid";

if ($result=mysqli_query($link,$sql1))
{
    if(mysqli_num_rows($result) > 0)
    {
        echo "<table>";
        echo "<tr>";
        echo "<th>petname</th>";
        echo "<th>total price</th>";
        echo "<th>orderid</th>";






        echo "</tr>";
        while($row = mysqli_fetch_array($result))
        {
            echo "<tr>";
            echo "<td>" . $row['pname'] . "</td>";
            echo "<td>" . $row['total_price'] . "</td>";
            echo "<td>" . $row['orderid'] . "</td>";

            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

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
            margin-left: 400px;
            border-collapse: collapse;
            width: 40%;
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