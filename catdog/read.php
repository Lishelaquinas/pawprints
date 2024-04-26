<?php
session_start();
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "petadoption123");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution
//$pid= $_POST ['Details'];

$pid = $_GET['var'];


$sql = "SELECT * FROM pet_details where pid =$pid";


$stat=1;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        echo "<tr>";
        echo "<th>pid</th>";
        echo "<th>pname</th>";
        echo "<th>breed</th>";
        echo "<th>gender</th>";
        echo "<th>vaccinated</th>";
        echo "<th>price</th>";

        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['pid'] . "</td>";
            echo "<td>" . $row['pname'] . "</td>";
            echo "<td>" . $row['breed'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['vaccinated'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "</tr>";
            $stat=$row['status'];
            $img=$row['image'];
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


mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<style>
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
        margin-left: 630px;
        cursor: pointer;
    }
    table {
        margin-top: 300px;
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
<body>
<?php
if($stat=='bought')
{
    echo "<br><button type=\"button\" >SOLD OUT</button>";
}
else{

    echo "<br><button type=\"button\" ><a href='order.php?var=$pid'>ORDER NOW </a>  </button>";
}
//echo "<img src='$img'>";
?>


</body>
</html>


