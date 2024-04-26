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







<!--DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {box-sizing: border-box}
        body {font-family: "Lato", sans-serif;}

        /* Style the tab */
        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: black;

            width: 25%;
            height: 200px;
        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: white;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;


        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color:turquoise ;
        }
        #more {display: none;}

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: transparent;
            width: 100%;
            border-left: none;
            height: 300px;
        }



        img {
            border-radius: 50%;
            padding: 30px;
        }
    </style>
</head>
<body>

<div id="breed" class="tabcontent">
    <h2>CAT BREED</h2>
    <form action="http://localhost/new/petadoption1/catdog/read.php" method="post">
    <img src="http://localhost/new/petadoption1/image/burmese.jpg" alt="Paris" width="300" height="300" >
        <!--input type="radio" name="Details" value="30001">Details
        <input type="submit" name="button" value="Submit">
<a href="read.php?var1=30004"><button>Click here</button></a>
    <img src="http://localhost/new/petadoption1/image/europeanshorthair.jpg" alt="Paris" width="300" height="300">
        <input type="radio" name="Details" value="30001">Details
        <input type="submit" name="button" value="Submit"/>

    <img src="http://localhost/new/petadoption1/image/persian.jpg" alt="Paris" width="300" height="300">
        <input type="radio" name="Details" value="30001">Details
        <input type="submit" name="button" value="Submit"/>

    <img src="http://localhost/new/petadoption1/image/ragdoll.jpg" alt="Paris" width="300" height="300">
        <input type="radio" name="Details" value="30001">Details
        <input type="submit" name="button" value="Submit"/>
    <img src="http://localhost/new/petadoption1/image/scottish.jpg" alt="Paris" width="300" height="300">
        <input type="radio" name="Details" value="30001">Details
        <input type="submit" name="button" value="Submit"/>
    <img src="http://localhost/new/petadoption1/image/siberian.jpg" alt="Paris" width="300" height="300">

       <input type="radio" name="Details" value="30001">Details
        <input type="submit" name="button" value="Submit"/>







    </form>
</div>
</body>
</html--->


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

$sql = "SELECT * FROM pet_details where pid>40000";


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






<!--



<div class="gallery">
    <br>
    <img src="http://localhost/new/petadoption1/image/persian.jpg" alt="Paris" width="300" height="300" ><br>
    <a href="read.php?var=40001"><button>click here</button></a>
</div>
<br>


<div class="gallery">
    <img src="http://localhost/new/petadoption1/image/bengal.jpg" alt="Paris" width="300" height="300"  ><br>
    <a href="read.php?var=40002"><button>click here</button></a>

</div>


<div class="gallery">

    <img src="http://localhost/new/petadoption1/image/siberian.jpg" alt="Paris" width="300" height="300" >
    <a href="read.php?var=40003"><button>click here</button></a>

</div>

<div class="gallery">
    <img src="http://localhost/new/petadoption1/image/ragdoll.jpg" alt="Paris" width="300" height="300" >
    <a href="read.php?var=40004"><button>click here</button></a>
</div>

<div class="gallery">
    <img src="http://localhost/new/petadoption1/image/scotish.jpg" alt="Paris" width="300" height="300" >
    <a href="read.php?var=40005"><button>click here</button></a>

</div>
<div class="gallery">
    <img src="http://localhost/new/petadoption1/image/burmese.jpg" alt="Paris" width="300" height="300" >
    <a href="read.php?var=40006"><button>click here</button></a>

</div>
<div class="gallery">
    <img src="http://localhost/new/petadoption1/image/Europeanshorthair.jpg" alt="Paris" width="300" height="300" >
    <a href="read.php?var=40007"><button>click here</button></a>

</div>


<div class="gallery">
    <img src="http://localhost/new/petadoption1/image/vancat.jpg" alt="Paris" width="300" height="300" >
    <a href="read.php?var=40008"><button>click here</button></a>

</div>

<div class="gallery">
    <img src="http://localhost/new/petadoption1/image/burmese1.jpg" alt="Paris" width="300" height="300" >
    <a href="read.php?var=40009"><button>click here</button></a>

</div>

<div class="gallery">
    <img src="http://localhost/new/petadoption1/image/persian1.jpg" alt="Paris" width="300" height="300" >
    <a href="read.php?var=40010"><button>click here</button></a>

</div>
-->









</body>

</html>


