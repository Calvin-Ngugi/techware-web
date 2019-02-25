<?php
if (isset($_POST[submit]))
	
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'ncalvin67@gmail.com';
	$email_subject = "New form submission";
	$email_body = "User Name: $name.\n". "User Email: $visitor_email.\n". "User Message: $message.\n";

	$to = "nncalvin@kabarak.ac.ke";
	$headers = "From: $email_from \r\n";
	$headers = "Reply-To: $visitor_email \r\n";
	mail($to, $email_subject, $email_body, $headers);
	header("Location: index.html")
?>