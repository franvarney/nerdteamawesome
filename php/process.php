 <?php

 	if(!isset($_POST['submit']))
 	{
	 // Get Data 
		$fname = strip_tags($_POST['txtFirst']);
		$lname = strip_tags($_POST['txtLast']);
		$phone = strip_tags($_POST['txtPhone']);
		$email = strip_tags($_POST['txtEmail']);
		if ($_POST['radContact'] = "Phone")
		{
			$contact = "Phone";
		}
		elseif ($_POST['radContact'] = "Email")
		{
			$contact = "Email";
		}
		$type = strip_tags($_POST['txtSerial']);
		$describe = strip_tags($_POST['txtDescribe']);

		mail( "fran.varn@gmail.com", "Contact Form Submission", 
		 	"
		 	First Name: $fname\n 
		 	Last Name: $lname\n 
		 	Phone: $phone\n 
		 	Email: $email\n 
		 	Contact Method: $contact\n 
		 	Device Type: $type\n
		 	Problem/Service Comments: $describe\n
	 	");
	}
 ?>