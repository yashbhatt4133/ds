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
    $num=$_POST['number'];
    if(is_numeric($num) && $num<101 && $num>1)
    {
        $p=0;
        for($i=1;$i<=$num;$i++)
            if($num%$i==0)
                $p++;
        if($p==2)
        {
            //fibonacci
            $a=0;
            $b=1;
            echo "Number was prime </br>Fibonacci series -> ";
            echo "$a, $b, ";
            for($i=0;$i<$num;$i++){
                $c=$a+$b;
                $a=$b;
                $b=$c;
                if($c>$num)
                    break;
                echo "$c, ";
            }
        }
        else{
            //factorial
            $fac=1;
            for($i=1;$i<=$num;$i++)
                $fac*=$i;
            echo "Number was composite </br> Factorial = $fac";
        }
    }
    else
        echo "Invalid Input";
?>
</body>
</html>