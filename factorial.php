
<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 30-04-2016
 * Time: 16:00
 */
extract($_POST);
if (isset($factorial)){
    if ($no1>1) {
        $fact = 1;
        for ($i = 1; $i <= $no1; $i++) {
            $fact = $fact * $i;
        }
    }
    else{
        echo "<strong style='color: red;align:center'>plz enter the valid number</strong> ";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Factorial</title>
</head>
<body>
<table border="0">
    <tr>
        <th>
            <h1 align="center">Find factorial of a given number</h1></th></tr>
    <form action="#" method="post">
        <tr>
            <td>
                Enter the number:</td>
            <td>
                <input type="number" name="no1"></td>
        <tr>
            <td>
                Result: </td>
            <td><label><?php if (isset($fact)){echo "<strong style='color:green'>".$fact."</strong>";} ?></label></td></tr>
        <tr></tr>
        <tr>
            <td align="center">
                <input type="submit" name="factorial" value="Find factorial"></td></tr>
    </form>
</table>
</body>
</html>