<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
            padding: 5px;
        }

        th {text-align: left;}
    </style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','my_db');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"petadoption123");
$sql="SELECT * FROM pet_details WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>pid</th>
<th>petname</th>
<th>breed</th>
<th>gender</th>
<th>vaccinated</th>
<th>price</th>
<th>depid</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['pid'] . "</td>";
    echo "<td>" . $row['petname'] . "</td>";
    echo "<td>" . $row['breed'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['vaccinated'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['depid'] . "</td>";


    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>