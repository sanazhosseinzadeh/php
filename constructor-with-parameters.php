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
/*Example Class*/
class Example
{
  public $Name, $Age;

  /*Constructor method with arguments*/
  public function __construct($UserName, $UserAge)
  {
    $this->Name = $UserName;
    $this->Age = $UserAge;
  }
}

/*Create the class object*/
$Obj1 = new Example("Emili", 24);
$Obj2 = new Example("Blunch", 36);
$Obj3 = new Example("Edward", 48);

/*Print*/
print_r([$Obj1, $Obj2, $Obj3]);
?>
</body>
</html>