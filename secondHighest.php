<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function secondHighest(array $arr) {

    sort($arr);

    echo $arr[sizeof($arr)-2];
}


secondHighest(array( 4, 9, 5, 2, 8, 0, 3, 22));
?>
</body>
</html>