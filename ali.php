!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">
        <input type="text" name='text1'>
        
        <input type="text" name='text2' value='<?php echo($pass)?>' >
        <input type="submit" value="submit">
    </form>
</body>
</html>


<?php

$text1 = $_POST['text1'];

$query = "SELECT * FROM users  WHERE id = $text1 OR email = $text1";
$result =  mysqli_query($db, $query);
$row=mysqli_fetch_assoc($result);
$pass = $row['password'];
?>