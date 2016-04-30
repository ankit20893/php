<?php

extract($_POST);
if(isset($reverse)){
    $rev=0;
    $pln=$no1;
    if ($no1!=0) {
        while ($no1 != 0) {
            $rem = $no1 % 10;
            $rev = $rev + ($rem*$rem*$rem);
            $no1 = intval($no1 / 10);
        }
        if ($pln == $rev) {
            $result = "given number is armstrong";
        } else {
            $result = "given number is not armstrong number";
        }
    }
    else{
        echo "<strong style='color: red;align:center'>plz enter the number</strong> ";
    }
}
else {
    if (isset($range)) {
        $sum = 0;
        $j=0;

        for ($i = $no1 + 1; $i <= $no2; $i++) {
            $num = $i;
            $sum = 0;
            $len = strlen($i); //Length of number i.e number of digits in a number
            while ($num > 0) {
                $rem = $num % 10;
                $power = pow($rem, $len);//Raise to the power of length of each digit in a number.
                $sum = $sum + $power; //Sum of power of all digits of a number
                $num = $num / 10; // Calculate next number
            }
            if ($sum == $i) {

                 $result1[$j]=$i;
                $j++;
                //$result1=$result1+$i;

            }
        }
    }
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>whether number is armstrong or not</title>
</head>
<body>
<table border="0">
    <tr>
        <th>
            <h1 align="center">whether number is armstrong or not?</h1></th></tr>
    <form action="#" method="post">
        <tr>
            <td>
                Enter the number:</td>
            <td>
                <input type="number" name="no1"></td>
        <tr>
            <td>
                Result: </td>
            <td><label><?php if (isset($result)){echo "<strong style='color:green'>".$result."</strong>";} ?></label></td></tr>
        <tr></tr>
        <tr>
            <td align="center">
                <input type="submit" name="reverse" value="Armstrong"></td></tr>
    </form>
    
    <!--find armstrong number between given range-->
    
    
</table>
<table border="0">
    <tr>
        <th>
            <h1 align="center">find number of armstrong number between range</h1></th></tr>
    <form action="#" method="post">
        <tr>
            <td>
                From:</td>
            <td>
                <input type="number" name="no1"></td></tr>
        <tr>
            <td>
                To:</td>
            <td>
                <input type="number" name="no2"></td></tr>

        <tr>

            <td>
                Result: </td>
            <td><label>
                    <?php if (isset($result1)){
                        //print_r(each($result1));
                        echo  "<strong style='color:green'>Armstrong numbers between $no1 to $no2 are: </strong>";
                        foreach ($result1 as $value){
                            echo  $value."&nbsp;";
                        }
                    }
                    ?>
                </label></td></tr>
        <tr></tr>
        <tr>
            <td align="center">
                <input type="submit" name="range" value="Find"></td></tr>
    </form>
</table>
</body>
</html>

