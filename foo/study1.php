<?php
/**
 * Created by IntelliJ IDEA.
 * User: hyukim
 * Date: 2018/04/06
 * Time: 18:53
 */
$zipcode = trim($_POST['zipcode']);
$zip_length = strlen($zipcode);
if ($zip_length != 5) {
    print "5555";
}
