<?php

session_start();

if (isset($_SESSION['counter'])) {

   $_SESSION['counter'] += 1;
} else {

   $_SESSION['counter'] = 1;
}
if (isset($_GET['reset'])) {
   echo "reset";
   session_unset();
   session_destroy();
   header('Location: index.php');
}

$my_Msg = "You have visited this page  " .  $_SESSION['counter'];

$my_Msg .= " times.";

?>

<html>

<head>

   <title>Starting a PHP session</title>

</head>

<body>
   <h1>Hello</h1>
   <?php echo ($my_Msg); ?>
   <p><a href="?reset=true">Reset</a></p>
   <?php
   if ($_SESSION['counter'] == 5) {
      echo "<h1>Wow</h1>";
      echo "Thank you for visiting the page a lot.";
   }

   if ($_SESSION['counter'] == 10) {
      header("Location: congratulations.php");
   }
   ?>
</body>

</html>