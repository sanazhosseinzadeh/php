<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Username</title>
</head>
<body>
<?php

$email = "hosseinenayati@gmail.com";

$func1 = explode("@",$email);
array_pop($func1);
$result = join('@', $func1);
print_r($result);

?>
</body>
</html>