<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['message_to'])){
		$message_to = stripslashes($_REQUEST['message_to']); // removes backslashes
		$message_to = mysqli_real_escape_string($con,$message_to); //escapes special characters in a string
		$message_content = stripslashes($_REQUEST['message_content']);
		$message_content = mysqli_real_escape_string($con,$message_content);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `messages` (message_to,message_content) VALUES ('$message_to', '$message_content')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Your Message Sent successfully.</h3><br/><a href='index.php'>You may now return home</a></div>";
        }
    }else{
?>
<div class="form">
<h1>New Message</h1>
<form name="new_message" action="" method="post">
<input type="text" name="message_to" placeholder="Username" required />
<input type="text" name="message_content" placeholder="message_content" required />
<input type="submit" name="submit" value="Send" />
</form>
<br /><br />
</div>
<?php } ?>
</body>
</html>
