
<?php
    $i=0;
    $j=0;

    for($i=0;$i<4;$i++){
        for($j=4;$j>$i;$j--){
            if($i==0 && $j==4)
                continue;
            echo "*";
        }
        for($j=2*$i-1;$j>0;$j--){
            echo "&nbsp; ";
        }
        for($j=4;$j>$i;$j--){
            echo "*";
        }
        echo "</br>";
    }
    $sp=7;
    for($i=2;$i<5;$i++){
        for($j=0;$j<$i;$j++){
            echo "*";
        }
        for($j=0;$j<$sp;$j++){
            echo "&nbsp; ";
            $sp-=2;
        }
        for($j=0;$j<$i;$j++){
            if($i==4 && $j==$i-1)
                continue;
            echo "*";
        }
        echo "</br>";
    }
?>
