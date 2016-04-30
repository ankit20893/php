<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 30-04-2016
 * Time: 15:04
 */

extract($_POST);
if(isset($reverse)){
    $rev=0;
    $pln=$no1;
    if ($no1!=0) {
        while ($no1 != 0) {
            $rem = $no1 % 10;
            $rev = $rev * 10 + $rem;
            $no1 = intval($no1 / 10);
        }
        if ($pln == $rev) {
            $result = "given number is panindrome";
        } else {
            $result = "given number is not panindrome number";
        }
    }
    else{
        echo "<strong style='color: red;align:center'>plz enter the number</strong> ";
    }
}
?>

<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>whether number is panindrome or not</title>
</head>
<body>
<table border="0">
    <tr>
        <th>
            <h1 align="center">whether number is panindrome or not?</h1></th></tr>
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
                <input type="submit" name="reverse" value="Reverse number"></td></tr>
    </form>
</table>
</body>
</html>

