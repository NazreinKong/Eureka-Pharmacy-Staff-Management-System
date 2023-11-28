<?php
require_once "config.php";
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

$staff_id = "";
$complaint = "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submit Complaint</title>
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
			color: #FF0000
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
    <h2>Submit a Complaint</h2>
    <form action="complaint.php" method="post">
		<label for="staff_id">Your Staff ID:</label><br>
        <textarea id="staff_id" name="staff_id" rows="1" cols="50"></textarea><br><br>
        <label for="complaint">Complaint:</label><br>
        <textarea id="complaint" name="complaint" rows="4" cols="50"></textarea><br><br>
        <button id="btn_go" name="submit_btn" type="submit" class="submit-button">Submit</button>
		<a class="return-button" href="staff_homepage.php">Cancel</a>
    </form>
	
	<?php
if(isset($_POST['submit_btn'])){
    $staff_id = $_POST['staff_id'];
    $complaint = $_POST['complaint'];
    
    if($staff_id == "" || $complaint == ""){
        echo '<script type="text/javascript">alert("Insert values in all fields")</script>';
    } else {
        $query = "INSERT INTO complaint VALUES ('$staff_id', '$complaint')";
        $query_run = mysqli_query($link, $query);
        if($query_run){
            echo '<script type="text/javascript">alert("Complaint submitted successfully :)")</script>';
        } else {
            echo '<script type="text/javascript">alert("Complaint not submitted successfully :(")</script>';
        }
    }
} else {
    echo "";
}
?>
</body>
</html>