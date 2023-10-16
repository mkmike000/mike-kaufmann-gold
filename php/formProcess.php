<?php

	// Set variables to empty values / placeholder / string.
	$name = $email = $subject = $message = $success = "";
	$nameErr = $emailErr = $subjectErr = $messageErr = "";

	// Gives input back if it is valid.
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		// A function that secures that the input is valid.
		function inputData($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$name = inputData($_POST["name"]);
		$email = inputData($_POST["email"]);
		$subject = inputData($_POST["subject"]);
		$message = inputData($_POST["message"]);

		// Error checker, if the Input field is empty.
		// function checkErr($var, $varErr, $htmlName, $htmlString) {
		// 	if (empty($_POST[$htmlName])) {
		// 		echo $varErr = "$htmlString is required. ";
		// 	} else {
		// 		echo $var = inputData($_POST[$htmlName]);
		// 	}
		// }
		//
		// checkErr($name, $nameErr, 'name', 'Name');
		// checkErr($email, $emailErr, 'email', 'Email');
		// checkErr($subject, $subjectErr, 'subject', 'Subject');
		// checkErr($message, $messageErr, 'message', 'Message');

		if (empty($_POST[name])) {
			echo $nameErr = "Name, ";
		} else {
			echo $name = inputData($_POST[name]);
			if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
		    	$nameErr = "Name, ";
		    }
		}

		if (empty($_POST[email])) {
			echo $emailErr = "Email, ";
		} else {
			echo $email = inputData($_POST[email]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		    	$email_error = "Email, ";
		    }
		}

		if (empty($_POST[subject])) {
			echo $subjectErr = "Subject, ";
		} else {
			echo $subject = inputData($_POST[subject]);
		}

		if (empty($_POST[message])) {
			echo $messageErr = "Message ";
		} else {
			echo $message = inputData($_POST[message]);
		}

		if ($nameErr == "" && $emailErr == "" && $subjectErr == "" && $messageErr == "") {
			$messageBody = '';
			unset($_POST['submit']);
			foreach ($_POST as $key => $value) {
				$messageBody .= "$key: $value\n";
			}

			$to = 'kaufmann.mike@live.de';
			$subject = 'Contactform submit.';
			if(mail($to, $subject, $message)) {
				$success = "Thank you!";
				$name = $email = $subject = $message = "";
			}
		}

	}

	// print_r($_POST);

?>
