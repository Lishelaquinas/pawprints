<?php

require_once "logSign/config.php";
if(isset($_POST['submitbtn']))
{
    $sql1 = "INSERT INTO pet_details (pid,pname,breed,gender,vaccinated,price,depid,image) VALUES (?, ?,?,?,?,?,?,?)";

    $stmt1 = mysqli_prepare($link, $sql1);
    mysqli_stmt_bind_param($stmt1, "issssiis",$va1,$va2,$va3,$va4,$va5,$va6,$va7,$va8);
    $va1=$_POST['pid'];
    $va2=$_POST['pname'];
    $va3=$_POST['breed'];
    $va4=$_POST['gender'];
    $va5=$_POST['vaccinated'];
    $va6=$_POST['price'];
    $va7=$_POST['depid'];
    $va8=$_POST['image'];
    mysqli_stmt_execute($stmt1);
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial;
            font-size: 17px;
            padding: 8px;
        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
        }

        .col-25 {
            -ms-flex: 25%; /* IE10 */
            flex: 25%;
        }

        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }

        .col-25,
        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: black;
            /* padding: 5px 20px 15px 20px;*/
            color: white;
            border: 1px solid lightgrey;
            border-radius: 3px;
            padding-left: 60px;
            margin-left: 400px;
            margin-right: 400px;
            padding-top: 20px;
        }



        input[type=text] {
            width: 90%;
            margin-bottom: 20px;
            padding: 12px;
            border: 2px solid turquoise;
            border-radius: 12px;
            background-color: black;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }

        /* icon-container {
             margin-bottom: 20px;
             padding: 7px 0;
             font-size: 24px;
         }*/

        button {
            background-color: black;
            border: 2px solid turquoise;
            border-radius: 14px;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-left: 230px;
            cursor: pointer;

        }
        button:hover {
            background-color: turquoise;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }

        span.price {
            float: right;
            color: grey;
        }

        /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }
            .col-25 {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>

<!--<h2>Responsive Checkout Form</h2>
<p>Resize the browser window to see the effect. When the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other.</p> -->
<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <div class="row">
                    <div class="col-50">
                        <h1>PET DETAILS</h1>
                        <!--  <h3>Billing Address</h3> -->
                        <label for="fname"><i class=""></i> pid</label>
                        <input type="text" id="fname" name="pid">
                        <label for="email"><i class=""></i> Pname</label>
                        <input type="text" id="email" name="pname">
                        <label for="adr"><i class=""></i>Breed</label>
                        <input type="text" id="adr" name="breed">
                        <label for="city"><i class=""></i> Gender</label>
                        <input type="text" id="city" name="gender">
                        <label for="city"><i class=""></i> Price</label>
                        <input type="text" id="city" name="price">
                        <label for="city"><i class=""></i> Vaccinated</label>
                        <input type="text" id="city" name="vaccinated">
                        <label for="city"><i class=""></i> Depid</label>
                        <input type="text" id="city" name="depid">
                        <label for="city"><i class=""></i> image</label>
                        <input type="text" id="city" name="image"><br>
                        <button type="submit" name="submitbtn">SUBMIT</button>

                    </div>
                </div>

            </form>
        </div>
    </div>



</div>

</body>
</html>

