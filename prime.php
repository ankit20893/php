<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29-04-2016
 * Time: 19:35
 */
extract($_POST);
$j=0;
if(isset($range)) {
    for ($i = $no1 + 1; $i < $no2; ++$i) {
        $flag = 0;
        for ($j = 2; $j <= $i / 2; ++$j) {
            if ($i % $j == 0) {
                $flag = 1;
                break;
            }
        }
        if ($flag == 0)
            $result1[$j]=$i;
        $j++;
    }
}
?>

<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border="0">
    <tr>
        <th>
            <h1 align="center">find number of prime number between range</h1></th></tr>
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
                        echo  "<strong style='color:green'>Prime numbers between $no1 to $no2 are: </strong>";
                        foreach ($result1 as $value){
                            echo  $value."&nbsp;";
                        }
                    }
                    ?>
                </label></td></tr>
        <tr></tr>
        <tr>
            <td align="center">
                <input type="submit" name="range" value="Prime"></td></tr>
    </form>
</table>

</body>
</html>