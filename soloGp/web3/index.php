<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculation Form</title>
</head>
<body>
<form action="calc.php" method="post">
    <b>Value 1: </b><br/>
    <input type="text" size="10" name="val1"><br/>
    <b>Value 2: </b><br/>
    <input type="text" size="10" name="val2"><br/>
    <b>Calculation:</b><br/>
    <input type="radio" name="calc" value="add">Add</input>
    <input type="radio" name="calc" value="sub">Subtract</input>
    <input type="radio" name="calc" value="mul">Multiply</input>
    <input type="radio" name="calc" value="div">Divide</input>
    <br/>
    <input type="submit" name="submit" value="Calculate">
    <input type="reset" value="Clear"><br/>
    </form>
</body>
</html>