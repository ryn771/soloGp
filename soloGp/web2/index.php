<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Favorite</title>
</head>
<body>
<form action="fav.php" method="post">
    <b>Please enter your first name: </b><br/>
    <input type="text" size="45" name="username"><br/>
    <b>Please select your favorite wine:</b><br/>
    <input type="radio" name="color" value="white">White</input><br/>
    <input type="radio" name="color" value="rose">Rose</input><br/>
    <input type="radio" name="color" value="red">Red</input><br/>
    <b>Please enter your favorite dish: </b><br/>
    <input type="text" size="45" name="dish"><br/><br/>
    <input type="submit" value="Submit this form"><br/>
    </form>
</body>
</html>