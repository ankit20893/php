<html>
<head>
<title>my first page</title>
	<script language="JavaScript" src="validation.js"></script>
</head>
<body>
<h1>Registration</h1>
<form name="regis"  action="#" method="post" enctype="multipart/form-data">
<table border="2">
<tr><td>First Name: </td><td><input type="text" onBlur=" check_blank();" id="fname" name="fname"></td></tr>
<tr><td>Last Name: </td><td><input type="text" onblur="return check_blank();"  id="lname" name="lname"></td></tr>
<tr><td>Email: </td><td><input type="email" onblur="return check_blank();"  id="email" name="email"></td></tr>
<tr><td>Password: </td><td><input type="password" onblur="return check_blank();"  id="password" name="password"></td></tr>
<tr><td>Mobile: </td><td><input type="number" onblur="return check_blank();"  id="mobile" name="mobile"></td></tr>
<tr><td>Address: </td><td><input type="text" onblur="return check_blank();"  id="address" name="address"></td></tr>
<tr><td>Gender: </td><td><input type="radio" id="gender" name="gender" value="male" checked>male<br>
                         <input type="radio" id="gender" name="gender" value="female">female
</td></tr>
<tr><td><input type="submit" name="submit" value="Submit"></td>
    <td><input type="submit" name="show" value="Show"></td></tr>
</table>
</form>
<form action="result.php" method="post">
	Username:<input type="text" name="username">
	Password:<input type="password" name="password">
	<input type="submit" name="submit1" value="Submit">
	</form>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","test");
	extract($_POST);
	if(isset($submit))
	{
		echo "Hello ".$fname."<br> your email is ".$email."<br>your password is ".$password."<br> your mobile number is ".$mobile."<br> your address is ".$address."<br> your gender is ".$gender;
	

	if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
	$sql="INSERT INTO users VALUES('','$fname','$lname','$password','$mobile','$address','$gender','$email')";
	if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
	}
if(isset($show)) {
	$sql = "SELECT * FROM users";
	$a = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($a);
	print_r($row);
	//echo implode($row);


		echo "<table>
           <tr><th>id</th><th>name</th><th>address</th><th>email</th><th>mobile</th><th>gender</th></tr>
           <tr><td>" . $row['id'] . "</td>
<td>" . $row['first_name'] . " " . $row['first_name'] . "</td>
<td>" . $row['address'] . "</td>
<td>" . $row['email'] . "</td>
<td>" . $row['mobile'] . "</td>
<td>" . $row['gender'] . "</td></tr>
</table>";

}?>
