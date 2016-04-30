
<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print tables</title>
</head>
<body>
<h1 align="center">print tables</h1>
<table>
    <form action="#" method="post">
        <tr>
        <td>
            Enter the number:
            </td>
            <td>
        <input type="number" name="no1">
        </td>
        </tr>
        <tr>
        <td>
        <input type="submit" name="table" value="Print table">
        </td>
        </tr>
        </form>
    </table>
<br>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 30-04-2016
 * Time: 19:03
 */
extract($_POST);
if (isset($table)) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$no1 * $i = " . $no1 * $i . "<br>";
    }
}
?>