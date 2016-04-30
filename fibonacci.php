<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29-04-2016
 * Time: 19:02
 */
$i=0;
$j=1;
$r=10;
$k=2;
echo $i."&nbsp;".$j."&nbsp;";
while($k<=$r){
    $num=$i+$j;
    $i=$j;
    $j=$num;
    echo $j."&nbsp;";
    $k++;
}