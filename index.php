<?php

include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is Home Page.</p>
    <p><a href="backupmysql.php"> Backup Mysqli</a></p>
    <p><a href="dashboard.php">Message Center</a></p>
<a href="logout.php">Logout</a>
<br />

</div>
</body>
</html>
