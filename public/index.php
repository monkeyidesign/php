<?php
require __DIR__.'/../vendor/autoload.php';
use App\Calc\Calc;
?>
<?php
if (isset($_POST['submit'])):
    $oper = $_POST["oper"];
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    if(!empty( $num1 ) && !empty( $num2 ) && !empty( $oper )){
        $calc = new Calc($num1,$num2);
        try {
            echo $calc->calculator($calc,$oper);
        } catch (TypeError $e) {
            echo "Error!: " .$e->getMessage();
        }
    }else{
        echo "Ooooooooop! data is empty";
    }
endif; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="?" method = "post">
    <p><input type= "number" name="num1" placeholder="First number"></p>
    <p><input type="number" name="num2" placeholder="Second number"></p>
    <p>
        <select name="oper" >
        <option value="add"> Addition </option>
        <option value="sub"> Substraction </option>
        <option value="div"> Division </option>
        <option value="mul"> Multiplication </option>
        <option value="percentage"> Percentage </option>
        </select>
    </p>
    <button type="submit" name="submit">  Calculate</button>

</form>

</body>
</html>