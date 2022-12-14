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
        $arr=['red','blue','green','orange','cyan','aqua','black','yellow','gray','magenta'];
        $n=rand(0,9);
        $col=$arr[$n];
        $div=<<<myend
        <div style="width:200px;height:200px;margin:50px;background-color:$col"></div>
myend;
        echo $div;
    ?>
</body>
</html>