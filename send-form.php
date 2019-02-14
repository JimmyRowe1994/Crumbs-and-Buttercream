<?php
	if(ISSET($_POST["submit"])) {
		$email_to = "hello-crumbs@outlook.com";
		$subject_line = "Crumbs & Buttercream Enquiry";
		$message = wordwrap("Name: " . $_POST["input-name"] .
			"\nE-mail: " . $_POST["input-email"] .
			"\nPhone: " . $_POST["input-phone"] .
			"\nDate of Event: " . $_POST["input-date"] .
			"\nType of Enquiry: " . $_POST["form-enquiry"] .
			"\nHeard About Via: " . $_POST["form-hear"] .
			"\nVenue: " . $_POST["input-venue"] .
			"\nNumber of People: " . $_POST["input-people"] .
			"\n\nMessage: " . $_POST["input-message"], 70);

		$headers = "From: Crumbs & Buttercream<office@crumbsandbuttercream.co.uk>\n";
		$headers .= "Reply-To: " . $_POST["input-email"];

		if(mail($email_to, $subject_line, $message, $headers)) {
			header("Location: http://crumbsandbuttercream.co.uk/HTML/contact.html");
		}
		else {
			echo "Error sending email.";
			echo "<script>alert('Error sending email.')</script>";
		}
	}
?>