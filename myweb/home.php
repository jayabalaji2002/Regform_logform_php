<?php
session_start();
?>
<h1><center> Hello <?php echo $_SESSION["email"]; ?></center></h1>

<a href="logout.php">Log out</a>

