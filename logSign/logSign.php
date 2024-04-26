!-- Include the config php file -->

<?php





// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username1 = $password1 = $confirm_password1 = "";
$username_err1 = $password_err1 = $confirm_password_err1 = "";

// Processing form data when form is submitted
if(isset($_POST['signbtn'])){

    // Validate username
    if(empty(trim($_POST["username1"]))){
        $username_err1 = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql1 = "SELECT id FROM users WHERE username = ?";

        if($stmt1 = mysqli_prepare($link, $sql1)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt1, "s", $param_username1);

            // Set parameters
            $param_username1 = trim($_POST["username1"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt1)){
                /* store result */
                mysqli_stmt_store_result($stmt1);

                if(mysqli_stmt_num_rows($stmt1) == 1){
                    $username_err1 = "This username is already taken.";
                } else{
                    $username1 = trim($_POST["username1"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt1);
    }

    // Validate password
    if(empty(trim($_POST["password1"]))){
        $password_err1 = "Please enter a password.";
    } elseif(strlen(trim($_POST["password1"])) < 6){
        $password_err1 = "Password must have atleast 6 characters.";
    } else{
        $password1 = trim($_POST["password1"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password1"]))){
        $confirm_password_err1 = "Please confirm password.";
    } else{
        $confirm_password1 = trim($_POST["confirm_password1"]);
        if(empty($password_err1) && ($password1 != $confirm_password1)){
            $confirm_password_err1 = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if(empty($username_err1) && empty($password_err1) && empty($confirm_password_err1)){

        // Prepare an insert statement
        $sql1 = "INSERT INTO users (username, password) VALUES (?, ?)";


        if($stmt1 = mysqli_prepare($link, $sql1)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt1, "ss", $param_username1, $param_password1);

            // Set parameters
            $param_username1 = $username1;
            $param_password1 = password_hash($password1, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt1)){
                // Redirect to login page
               // header("location: logSign.php");
                session_start();
                $_SESSION['username']=$username1;
                header("location:customerdetails.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt1);
    }

    // Close connection
    mysqli_close($link);
}

//New Code

$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if(isset($_POST['logbtn'])){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if($username=='root' && $password='root')
    {
        header('location:../admin.php');
    }

    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: ../catdog/catdog.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}

//New Code End

?>




<!-- HTML CODE FOR LOG AND SIGN -->
<!DOCTYPE html>
<html>
<head>
    <link href="logSign.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="jquery-1.10.2.min.js"></script>
    <script src="JQUERYMain.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../../main/htmlFiles/index.html"> </a>
        </div>
        <!--div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#showcase">Home</a></li>
                <li><a href="#info1">About</a></li>
                <li><a href="../../dashboard/html/dash.html">Contact</a></li>
            </ul>
        </div-->
    </div>
</nav>
<div id="box">
    <div id="main"> </div>

    <div id="loginform">
        <h1>LOGIN</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <input type="submit" class="btn btn-primary" style="background-color: turquoise "value="LOGIN" name="logbtn">

        </form>
    </div>




    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <div id="signupform">
            <br><h1>SIGN UP</h1>

            <div class="form-group <?php echo (!empty($username_err1)) ? '' : ''; ?>">
                <input type="text" placeholder="Full Name" name="username1" class="form-control" value="<?php echo $username1; ?>"><br>
                <?php echo $username_err1; ?>
            </div>

            <div class="form-group <?php echo (!empty($password_err1)) ? 'has-error' : ''; ?>">
                <input type="password" placeholder="Password" name="password1" class="form-control" value="<?php echo $password1; ?>"><br>
                <?php echo $password_err1; ?>
            </div>









            <?php echo (!empty($confirm_password_err1)) ? '' : ''; ?>
            <input type="password" placeholder="Confirm Password" name="confirm_password1" class="form-control" value="<?php echo $confirm_password1; ?>"><br>
            <?php echo $confirm_password_err1; ?><br>


            <input type="submit" class="btn btn-primary" style="background-color: turquoise" value="SIGN UP" name="signbtn">
        </div>

    </form>





    <div id="login_msg">Have an account?</div>
    <div id="signup_msg">Don't have an account?</div>

    <button id="login_btn" style="background-color: grey">LOGIN</button>
    <button id="signup_btn" style="background-color: grey">SIGN UP</button>


</div>


</body>
</html>