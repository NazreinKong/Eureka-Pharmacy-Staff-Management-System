<!DOCTYPE html>
<html>
<head>
    <title>Payroll Receipt</title>
</head>
<style>
	body {
            background-color: #99ff33;
            text-align: center;
            font-family: Rockwell, sans-serif;
        }
        
    .container {
        max-width: 400px;
        margin: 10px auto;
        padding: 20px;
        background-color: #006600;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
	table {
	margin-left:auto;
	margin-right:auto;
    width: 60%;
    text-align: center;
	border: 3px solid black;
    border-radius: 5px;
	border-collapse: collapse;
	}
  
	th, td {
    padding: 10px;
	border: 3px solid black;
    border-radius: 5px;
	text-align:center;
	}
  
	th {
	border: 3px solid black;
    border-radius: 5px;
    background-color: green;
    color: white;
	}
  
	td {
	border: 3px solid black;
    border-radius: 5px;
    background-color: lightgreen;
	}
	
	.return-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #f27e95;
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
        background-color: #00ff00;
        color: #000000;
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

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pharmacy";

    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

	$staff_id = $_POST["staff_id"];

// Prepare a query to check if the staff ID exists in the 'management' table
	$sql = "SELECT salary, FirstName, LastName FROM management WHERE staff_id = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $staff_id);
	$stmt->execute();
	$stmt->store_result(); // Store the result to use num_rows

	if ($stmt->num_rows > 0) {
    // If the staff ID exists in the 'management' table, retrieve and display details
    $stmt->bind_result($salary, $FirstName, $LastName);
    $stmt->fetch();
    $payroll = $salary + ($salary * 0.1);

    // Display the receipt
    echo "<p>Staff ID: $staff_id</p>";
    echo "<p>First Name: $FirstName</p>";
    echo "<p>Last Name: $LastName</p>";
    echo "<p>Salary: RM$payroll</p>";
	 

    $stmt->close();
} else {
    // If the staff ID does not exist in the 'management' table, display an error message
    echo '<script type="text/javascript">
            alert("Invalid staff ID. Please enter a valid staff ID.");
            window.location = "payroll.php";
          </script>';
	
}
    $conn->close();
    ?>

<body>
<form action="">
<div class="submit-button">
<a href="online_banking.php">Online Banking</a></div>
<div class="submit-button">
<a href="credit_debit_card.php">Credit/Debit Card</a></div>
<div class="submit-button">
<a href="e-wallet.php">e-Wallet</a><br></div>
<div class="return-button">
<a href="payroll.php">Return</a><br>
</form>
</body>
</html>
