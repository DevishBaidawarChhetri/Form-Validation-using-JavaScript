<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=960">
	<title>Java Script Validation</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/validation.js"></script>
</head>
<body>
	<div class="error" style="display: none;"></div>
	<form class="contact-form" method="POST" action="action.php" onsubmit="Javascript: return validation3();">
		<table width="500">
			<tr>
				<td>Fullname:</td>
				<td><input type="text" id="fname" name="fname" onkeyup="Javascript: autoMail();"><span class="error-span" id="error-name">Please Enter full name!</span></td>
			</tr>
			<tr>
				<td>Phone:</td>
				<td><input type="number" id="phone" name="phone"><span class="error-span" id="error-phone">Please Enter phone!</span></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" id="email" name="email"><span class="error-span" id="error-email">Please Enter email!</span></td>
			</tr>
			<tr>
				<td>Message:</td>
				<td><textarea name="message" id="message" cols="30" rows="5"></textarea><span class="error-span" id="error-msg">Please write message!</span></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>