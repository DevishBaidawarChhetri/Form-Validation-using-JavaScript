<?php 
	$fname = $_POST['fname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$message = $_POST['message'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=960">
	<title>Action</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="contact-form">
		<table width="500">
			<tr>
				<td>Fullname:</td>
				<td><?php echo $fname; ?></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><?php echo $phone; ?></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><?php echo $email; ?></td>
			</tr>
			<tr>
				<td>Message:</td>
				<td><?php echo $message; ?></td>
			</tr>
			<tr>
				<td colspan="2"><a href="index.php">Go Back</a></td>
			</tr>
		</table>
	</div>
</body>
</html>