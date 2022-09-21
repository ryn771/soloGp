<?php

if (isset($_COOKIE['auth'])) {
    header("Location:loggedin.php");
    exit();
}
// set cookies
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $auth = "auth";


    if (empty($username) || empty($password)) {
        header("Location:index.php");
        exit();
    } else {
        setcookie($auth, "ok", time() + (60 * 60));
        header("Location:loggedin.php");
    }
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name: <input type="text" name="username">
        Password: <input type="text" name="password"><br /><br />
        <input type="submit" name="submit" value="Log Me In">
    </form>
</body>

</html>