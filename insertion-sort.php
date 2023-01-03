<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Sort Progam in PHP with a while loop</title>
</head>
<body>
<?php
function insertionSort($data)
{
    $n=count($data);
    $next=null;
    for($i=1; $i<$n; $i++)//outer loop
    {
        $next=$data[$i];
        for($j=$i-1; $j>=0; $j--)//inner loop
        {
            if( $data[$j]>$next )//change > to < for descending order
            {
                $data[$j+1]=$data[$j];
            }
            else
            {
                break;
            }
        }
        $data[$j+1]=$next; // insert the next value to the correct postion of the already sorted elements
 
    }
 
    return $data;
}
 
echo implode(",",array(43,23,4,11,2,88,76,46));
echo "<br>";
echo implode(",",insertionSort(array(43,23,4,11,2,88,76,46)));
?>
</body>
</html>