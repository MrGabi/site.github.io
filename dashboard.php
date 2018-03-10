<?php
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Message Center</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
    <p>This is Message Center Page.</p>
    <p><a href="new_message.php">Send New Message</a></p>
<p> Your Messages</p>
    <ul>
    <?php
    $loop = mysqli_query($con, "SELECT * FROM messages")
    or die (mysqli_error($con));

    while ($row = mysqli_fetch_array($loop)) {
        $message_id = $row['id'];
        echo "<li><a href='view_message.php?message_id=$message_id'> Message From ".$row['message_to']."</a></li>";
    }
?>
    </ul>
    <a href="index.php">Home</a><br>
    <a href="logout.php">Logout</a>

</div>
</body>
</html>
