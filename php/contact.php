<?php

$first = $_POST['name'];
$last = $_POST['surname'];
$from = $_POST['email'];
$message = $_POST['message'];
$to = 'tran.art13@gmail.com';
$human = $_POST['human'];

if($_POST['submit'] && $human == 4) {
	if(mail($to, 'New email from contact form', $message)) {
		echo "Thank you! I'll be in touch";
	}
}

echo "I'm sorry, something went wrong sending your email. Go back and try again.";
?>