<!DOCTYPE>
<html>
<head>
	<title> Registration System </title>
	<link rel="stylesheet" type="text/css" href="joy.css">
</head>
<body>
	<form action="operation.php" method="post">
		<div class="main">
			<div class="rgsystem">
				<h> Registration System </h>
			</div>
			<div class="partitiondiv">
				
						<div class="firstnamediv">
							<span>First Name</span>
							<br>
							<input type="text" name="fname">
						</div>
						<div class="lastnamediv">
							<span>Last Name</span>
							<br>
							<input type="text" name="lname">
						</div>
					
					
						<div class="iddiv">
							<span>ID</span>
							<br>
							<input type="text" name="iid">
						</div>
						<div class="emaildiv">
							<span>Email</span>
							<br>
							<input type="text" name="eemail">
						</div>
				
				
					<div class="header2div">
						<h> Select Section</h>
					</div>
					<div class="sectiondiv">
					
						<select name="section">
							<option value="1">Section A</option>
							<option value="2">Section B</option>
							<option value="3">Section C</option>
							<option value="4">Section D</option>
						</select>
					
					</div>
					<div class="regi">

						<div class="reg">
					<input type="submit" name="compare" value="Submit">
						</div>

						<div class="cncl">
						<input type="reset" name="clear" value="Cancel">
					</div>

					</div>

					

					<div class="developer">

						<div class="name">
							<h1> Developed By </h1>
							<h2> Md. Ebrahim Joy </h2>

						</div>

					</div>
				
			</div>
		</div>
	</form>
</body>
</html>