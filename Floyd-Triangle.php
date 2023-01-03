<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floyd’s Triangle</title>
</head>
<body>
<?php
$number = 0;
for ($i = 0; $i <= 12; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $number . "&nbsp&nbsp&nbsp;";
        $number++;
        if ($j == $i) {
            echo "&nbsp&nbsp&nbsp<br/>";
        }
    }
}
?>
</body>
</html>