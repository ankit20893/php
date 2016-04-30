<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29-04-2016
 * Time: 16:28
 */
for ($i=1;$i<=5;$i++){
    for ($j=1;$j<=$i;$j++){
        echo "&nbsp;*&nbsp";
    }
    echo "<br>";
}
echo "<br><br><br>";

for ($k=1;$k<=5;$k++)
{
    for($m=5-$k;$m>0;$m--){
        echo "&nbsp;&nbsp;";
        //echo "hello";
    }
    for ($l=1;$l<=$k;$l++){
        echo "&nbsp;*&nbsp";
    }
    echo "<br>";
}
echo "<br><br><br>";

for ($i=1;$i<=5;$i++){
    for($m=1;$m<$i;$m++){
        echo "&nbsp;&nbsp;";
        //echo "hello";
    }
    for ($j=$i;$j<=5;$j++){
        echo "&nbsp;*&nbsp";
    }
    echo "<br>";
}
echo "<br><br><br>";



for ($i=1;$i<=9;$i++){
    if ($i<=5){
        for($j=1;$j<=$i;$j++){
            echo "&nbsp;*&nbsp";
        }
        echo "<br>";
    }
    else{
        for ($j=$i;$j<=9;$j++){
            echo "&nbsp;*&nbsp";
        }
        echo "<br>";
    }
}
?>