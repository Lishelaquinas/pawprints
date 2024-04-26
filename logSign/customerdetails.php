<?php
//session_start();
//echo $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="order.css">
</head>
<style>
    .container{
        max-width: 350px;
        float: none;
        margin: 150px auto;
        margin-left: 400px;
        border:2px solid lightblue;
        background: rgba(211,211,211,0.25);


    }
    .row{

        padding: 10px;
        padding-top: 10px;
    }
    /*.col-50{
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: transparent;
        background: rgba(211,211,211,0.75);
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.5rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }*/





</style>
<body>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="insert.php" method="post">

                <div class="row">
                    <div class="col-50">
                        <h3>Customer Details </h3>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="firstname" placeholder="John M. Doe"><br><br>

                        <label for="adr"><i class="fa fa-address-card"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="542 W. 15th Street"><br><br>

                        <label for="cont"><i class="fa-fa-phone"></i> Contact</label>
                        <input type="text" id="cont" name="contact" placeholder="999999999"><br>
                        <br>
                        <!--   <label>
                               <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                           </label> -->
                        <!--  <input type="submit" value="Continue to checkout" class="btn"> -->
                        <!-- <button type="Submit" formaction="http://localhost/petadoption/logSign/insert.php">Submit</button><br>-->
                        <!--input type="submit" name="submit" value="submit"-->
                        <button class="w3-btn w3-blue" name="submit">Submit</button></p


                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

</body>
</html>
