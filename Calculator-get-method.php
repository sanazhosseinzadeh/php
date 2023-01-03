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
$result = "";
class GET_Calculator
{
    var $FirstNumber;
    var $SecondNumber;
 
    function T4Tutorials($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->s + $this->t;
            break;
 
            case '-':
            return $this->s - $this->t;
            break;
 
            case '*':
            return $this->s * $this->t;
            break;
 
            case '/':
            return $this->s / $this->t;
            break;
 
            default:
            return "Sorry No command found";
        }
    }
    function getresult($FirstNumber, $SecondNumber, $c)
    {
        $this->s = $FirstNumber;
        $this->t = $SecondNumber;
        return $this->T4Tutorials($c);
    }
}

$cal = new GET_Calculator();
if(isset($_GET['submit']))
{
    $result = $cal->getresult($_GET['No1'],$_GET['No2'],$_GET['op']);
}
?>

<form method="GET">
<table align="center">
    <tr>
        <td><strong><?php echo $result; ?><strong></td>
    </tr>
    <tr>
        <td>Please Enter 1st Number</td>
        <td><input type="text" name="No1"></td>
    </tr>

    <tr>
        <td>Please Enter 2nd Number</td>
        <td><input type="text" name="No2"></td>
    </tr>

    <tr>
        <td>Select Oprator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="       =       "></td>
    </tr>

</table>
</form>

</body>
</html>

