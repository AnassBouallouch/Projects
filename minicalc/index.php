<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form>
    <input type="text" name="num1" placeholder="Number 1">
    <select name="operator">
        <option>Add</option>
        <option>Substract</option>
        <option>Divide</option>
        <option>Multiply</option>
    </select>
    <input type="text" name="num2" placeholder="Number 2">
    <button name="submit" value="submit" type="submit">Calculate</button>
</form>
<?php

if (isset($_GET['submit'])){
    $result1=$_GET['num1'];
    $result1=$_GET['num1'];

}




?>
</body>
</html>