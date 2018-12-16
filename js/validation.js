
function validation() {
	let full_name = document.getElementById('fname').value;
	let phone = document.getElementById('phone').value; 
	let email = document.getElementById('email').value;
	let message = document.getElementById('message').value;

	if (full_name == '') {
		alert('Please enter full name!');
		document.getElementById('fname').focus();
		return false;
	}
	if (phone == '') {
		alert('Please enter your number!');
		document.getElementById('phone').focus();
		return false;
	}
	if (email == '') {
		alert('Please enter email!');
		document.getElementById('email').focus();
		return false;
	}
	if (message == '') {
		alert('Please write some messages!');
		document.getElementById('message').focus();
		return false;
	}
}


function validation2() {
	full_name = document.getElementById('fname').value;
	phone = document.getElementById('phone').value; 
	email = document.getElementById('email').value;
	message = document.getElementById('message').value;

	err_msg = '';

	if (full_name=='') {
		err_msg += 'Name is empty<br>';
	}
	if (phone=='') {
		err_msg += 'Phone is empty<br>';
	}
	if (email=='') {
		err_msg += 'Email is empty<br>';
	}
	if (message=='') {
		err_msg += 'Message is empty<br>';
	}
	if (err_msg != '') {
		document.getElementById('error').style.display='block';
		document.getElementById('error').innerHTML = err_msg;
		return false;
	}
}

function autoMail(){
	full_name = document.getElementById('fname').value;
	email = full_name+'@gmail.com';
	document.getElementById('email').value = email;
}

function validation3() {
	full_name = document.getElementById('fname').value;
	phone = document.getElementById('phone').value; 
	email = document.getElementById('email').value;
	message = document.getElementById('message').value;

	if (full_name=='') {
		document.getElementById('error-name').style.display = "block";
		document.getElementById('fname').focus();
		return false;
	}
	if (phone=='') {
		document.getElementById('error-phone').style.display = "block";
		document.getElementById('phone').focus();
		return false;
	}
	if (email=='') {
		document.getElementById('error-email').style.display = "block";
		document.getElementById('email').focus();
		return false;
	}
	if (message=='') {
		document.getElementById('error-msg').style.display = "block";
		document.getElementById('message').focus();
		return false;
	}
}