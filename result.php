<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 29-04-2016
 * Time: 14:04
 */
extract($_POST);
if(isset($submit1)){
    echo "your username is <strong>".$username."</strong>";
    echo "<br>your password is <strong>".$password."</strong>";
}
?>