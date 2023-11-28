<!DOCTYPE html>
<html lang="en">
<head>
<style>
	body {
            background-color: #99ff33;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        
        .container {
            max-width: 400px;
            margin: 10px auto;
            padding: 20px;
            background-color: #006600;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .company-logo {
            max-width: 200px;
            margin-bottom: 30px;
        }
        
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #DDD;
            border-radius: 5px;
        }
        
        .submit-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #00ff00;
            color: #FFFFFF;
            border: 3px solid black;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
			margin-left: 20px;
            transition: background-color 0.3s ease;
        }
        
        .submit-button:hover {
            background-color: #FF4081;
			
        }
		
		h1{color: #ccffcc;
		font-family: Rockwell, sans-serif;
		font-size: 16;
		}
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="container">
	<img src="css/sem_ah_yem_logo.jpg" width="500" height="150"alt="Company Logo" class="company-logo">
        <h1>Welcome to Sem Ah Yem Website.</h1>
    </div>
	<p style="font-size: 18px;">Are you a staff or an admin?</p>
<div class="submit-button">
<a href="staff_login.php">Staff</a></div>
<div class="submit-button">
<a href="login.php">Admin</a></div><br>
</div>
</body>
</html>