<html>
<style>
    button {
        background-color:turquoise;
        border: none;
        border-radius: 4px;
        color: white;
        padding: 5px 5px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin-left: 10px;
        cursor: pointer;
    }


</style>
<body>

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
if (isset($_POST['submit']))
{
    $cname = $_POST['firstname'];

    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $username=$_SESSION['username'];
   // $_SESSION['username'];
  //  echo $address,$contact,$cname;
 //   echo "Chintu";




    $squery = "INSERT INTO customers(cname,address,custno,username) VALUES ('$cname','$address',$contact,'$username')";

    if (mysqli_query($link, $squery))
    {
        echo "You have Sucessfully registerd !! LOGIN TO FIND  FIND YOUR PERFECT PET MATCH";
    }






    mysqli_close($link);
}


?>
<br>
<button><a href="logSign.php"> LOGIN </a></button>

</body>


</html>
