
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {

            margin: auto;
            background-color: transparent;

            color: white;
            border-radius: 10px;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
            position: relative;
        }

        .topnav #myLinks {
            display: none;
        }

        .topnav a {
            color: white;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            display: block;
        }

        .topnav a.icon {
            background: black;
            display: block;
            position: absolute;
            right: 0;
            top: 0;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .active {
            background-color: turquoise;
            color: white;
        }
        .box input[type="button"]
        {
            margin-left: 170px;
            text-align: center;
border: 2px transparent;
            padding: 14px 40px;
background-color: turquoise;
            outline: none;
            color: black;
            border-radius: 24px;
            transition: .25s;
            cursor: pointer;}

        .boxx input[type="button"]
        {
            margin-left: 200px;
            text-align: center;
            border: 2px solid transparent;
            padding: 14px 40px;
background-color: turquoise;
            outline: none;
            color: black;
            border-radius: 24px;
            transition: .25s;
            cursor: pointer;
        }

        {
            box-sizing: border-box;
        }

        .column {
            float: left;
            width: 45.33%;
            padding: 30px;
        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
</head>
<body>

<!-- Simulate a smartphone / tablet -->
<div class="container">

    <!-- Top Navigation Menu -->
    <div class="topnav">
        <a href="#home" class="active">Paw Prints</a>
        <div id="myLinks">
            <a href="http://localhost/new/petadoption1/catdog/orderdetails.php">Order Details</a>
            <a href="http://localhost/new/petadoption1/catdog/accountinfo.php">Account info</a>
            <a href="http://localhost/new/petadoption1/">Signout</a>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    <br>
    <br>
    <div class="row">
        <div class="column">
            <img src="http://localhost/new/petadoption1/image/image3.jpg" style="width:75%">
            <li>
                <form class="box"  method="post">
                    <a href="http://localhost/new/petadoption1/catdog/dog1.php"><input type="button" name="" value="Dog Breed" ></a></form>
            </li>
        </div>

        <div class="column">
            <img src="http://localhost/new/petadoption1/image/image5.jpg"  style="width:80%">
            <li>
                <form class="boxx"  method="post">
                    <a href="http://localhost/new/petadoption1/catdog/cat1.php"><input type="button" name="" value="Cat Breed" ></a></form>
            </li>

        </div>

    </div>







    <!-- End smartphone / tablet look -->
</div>

<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>

</body>
</html>
