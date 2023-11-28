<?php
session_start();
require_once "config.php";

$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT username, password FROM staff WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = $username;
            

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            session_start();

                            $_SESSION["loggedin"] = true;
                            $_SESSION["password"] = $password;
                            $_SESSION["username"] = $username;                            

                            header("location: staff_homepage.php");
                        } else{
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);
        }
    }
    
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
       body {
            background-color: #f5ed0f;
            text-align: center;
            font-family: Rockwell, sans-serif;
        }
        
        .container {
            max-width: 400px;
            margin: 10px auto;
            padding: 50px;
            background-color: #6c8a22;
            border-radius: 15px ;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.1);
        }
        
        .company-logo {
            max-width: 200px;
            margin-bottom: 30px;
        }
		
		.error-prompt{
			color: ##ea9999
		}
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #DDD;
            border-radius: 5px;
        }
				
				.return-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #f27e93;
    color: #FFFFFF; /* Change text color to white */
    border: 3px solid black;
    border-radius: 5px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s ease;
	}
		
	.return-button:hover {
        background-color: #ffe599;
        }
        
        .submit-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: green;
            color: #FFFFFF;
            border: 3px solid black;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .submit-button:hover {
            background-color: #FF4081;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sem Ah Yem Staff Information Center Login</h2>
		<img src="css/sem_ah_yem_logo.jpg"  width="500" height="150" alt="Company Logo" class="company-logo">
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <div class="error-prompt"><span class="help-block" ><?php echo $password_err; ?></span></div>
            </div>
            <div class="form-group">
                <input type="submit" class="submit-button" value="Login">
            </div><br>
			<a class="return-button" href="startup_page.php">Cancel</a>
            <p>Don't have an account? <a href="staff_register.php">Sign up now</a>.</p>
			
        </form>
    </div>    
</body>
</html>