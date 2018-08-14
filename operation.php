<!DOCTYPE>
<html>
<head>
	<title> Operation</title>
</head>
<body>

	<?php

	include 'connection.php';
		if(isset($_POST['compare']) && $_POST['compare'] == 'Submit'){
        	$variable = $_POST['section'];
			switch ($variable) {
			case 1:				
					if ($conn -> connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
					
					else{
						$all = "SELECT * FROM `section_a`";
						$var = mysqli_query($conn, $all);
						$totalrows = mysqli_num_rows($var);
						if ($totalrows <= 30) {
							$sql = "INSERT INTO `section_a` (first_name, last_name, id, email)
							 VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["iid"]."', '".$_POST["eemail"]."')";
							
							if (mysqli_query($conn, $sql)) {
							 	echo "Registered successfully";
							}
							else{
								echo "alert";
							}
							mysqli_close($conn);
						}
						else{
							echo "SECTION  IS  FULL, Please Select Another Section (Registration Failled)";
						}
					}
					break;

				case 2:				
					if ($conn -> connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
					
					else{
						$all = "SELECT * FROM `section_b`";
						$var = mysqli_query($conn, $all);
						$totalrows = mysqli_num_rows($var);
						if ($totalrows <= 30) {
							$sql = "INSERT INTO `section_b` (first_name, last_name, id, email)
							 VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["iid"]."', '".$_POST["eemail"]."')";
							
							if (mysqli_query($conn, $sql)) {
							 	echo "Registered successfully";
							}
							else{
								echo "alert";
							}
							mysqli_close($conn);
						}
						else{
							echo "SECTION  IS  FULL, Please Select Another Section (Registration Failled)";
						}
					}
					break;

				case 3:				
					if ($conn -> connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
					
					else{
						$all = "SELECT * FROM `section_c`";
						$var = mysqli_query($conn, $all);
						$totalrows = mysqli_num_rows($var);
						if ($totalrows <= 30) {
							$sql = "INSERT INTO `section_c` (first_name, last_name, id, email)
							 VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["iid"]."', '".$_POST["eemail"]."')";
							
							if (mysqli_query($conn, $sql)) {
							 	echo "Registered successfully";
							}
							else{
								echo "alert";
							}
							mysqli_close($conn);
						}
						else{
							echo "SECTION  IS  FULL, Please Select Another Section (Registration Failled)";
						}
					}
					break;

				case 4:				
					if ($conn -> connect_error) {
						die("Connection failed: " . $conn->connect_error);
					}
					
					else{
						$all = "SELECT * FROM `section_d`";
						$var = mysqli_query($conn, $all);
						$totalrows = mysqli_num_rows($var);
						if ($totalrows <= 30) {
							$sql = "INSERT INTO `section_d` (first_name, last_name, id, email)
							 VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["iid"]."', '".$_POST["eemail"]."')";
							
							if (mysqli_query($conn, $sql)) {
							 	echo "Registered successfully";
							}
							else{
								echo "alert";
							}
							mysqli_close($conn);
						}
						else{
							echo "SECTION  IS  FULL, Please Select Another Section  (Registration Failled)";
						}
					}
					break;
				}
			}


			?>
</body>
</html>

				