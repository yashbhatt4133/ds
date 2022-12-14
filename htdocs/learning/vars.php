<?php
    $intvar1=5;
    $intvar2=5e3;
    $floatvar=5.5;
    $boolvar=true;
    $stringvar1='var1';
    $stringvar2="var2";

    //header
    $stringvar3=<<<myend
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero magni aut incidunt, hic accusamus veritatis distinctio molestias natus eius numquam ipsum a, quasi illum et quis libero! Illum, sunt eum.</p>
myend;
    echo $stringvar3;

    //2 ways for converting float to int
    echo (int)$floatvar;
    echo "<br/>";
    echo intval($floatvar);
    echo "<br/>";
    echo $intvar2;
    echo "<br/>";
    echo 1=='1';
    echo "<br/>";
    echo 1==='1';
    echo "<br/>";
    //when === return 1 !== returns false
    echo 1!='1';
    echo "<br/>";
    echo 1!=='1';
    echo "<br/>";
    // != is same as <>


    //checks on basis of lexicographical order
    echo('abc' < '1Abc');
    echo "<br/>";
    echo('abc' > 'Abc');

    echo "<br/>";
    $part1='int';
    $part2='var1';
    $combined=$part1.$part2;
    echo $combined;
    echo "<br/>";
    echo $$combined;//known as variable variable
    echo "<br/>";
    define('PI',3.1415926);//constant in php
    // print_r($GLOBALS);
    echo "<br/>.............................<br/>";
    function fun(){
        global $intvar1;
        print($intvar1);
        print("<br/>".__LINE__."  ".__FUNCTION__);//magic constants
    }
    fun();
    echo "<br/>";
    function tragedy(){
        static $statvar=1;
        print("<br/>".$statvar." ".__LINE__." ".__FUNCTION__);
        $statvar++;
    }
    tragedy();
    tragedy();
    tragedy();

    //reference
    echo "<br/>..............................<br/>";
    $a=5;
    $b=&$a;
    print("a=".$a." b=".$b."<br/>");
    $a++;
    print("a=".$a." b=".$b."<br/>");
    unset($b);
    print("a=".$a." b=".$b."<br/>");
    $a++;
    $b++;
    print("a=".$a." b=".$b."<br/>");
    echo "<br/>..............................<br/>";
    $result=@(57/5);
    echo "<br/>".$result;
    echo "<br/>..............................<br/>";
    $output=`ls -l`;
    print($output);
    //settype(), gettype(), empty(), 
    //if(condition)
?>