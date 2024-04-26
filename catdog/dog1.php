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

?>


<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="dogstyle.css">
</head>
<body>
<style>
    div.gallery {
        margin: 5px;
      /*  border: 1px solid #ccc;*/
        float: left;
        width: 300px;
    }

    /*div.gallery:hover {
        border: 1px solid #777;
    }*/

    div.gallery img {
        width: 100%;
        height: 250px;
        padding-left:100px;
    }
    button {
        background-color:black;
        border: none;
        border-radius: 12px;
        color: white;
        padding: 10px 15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-left: 170px;
        cursor: pointer;

    }



</style>



<?php

$sql = "SELECT * FROM pet_details where pid<40000";


$stat=1;
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_array($result)){

            $stat=$row['status'];
            $img=$row['image'];
            $pid=$row['pid'];

            echo "<div class='gallery'>";
            echo "<img src='$img' alt='Paris' width='300' height='300' alt='../image/log.jpg'>";
            echo "<a href='read.php?var=$pid'><button>click here</button></a>";
            echo "</div>";
        }

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









</body>

</html>