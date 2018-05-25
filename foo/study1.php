<?php
    /**
     * Created by IntelliJ IDEA.
     * User: hyukim
     * Date: 2018/04/06
     * Time: 18:53
     */
    $zipcode = '114-0033';
    //$zipcode = trim($_POST['zipcode']);
    $zip_length = strlen($zipcode);
    if ($zip_length != 5) {
        print "5555";
    }

    nl2br("\n");

    $preapration = 'hot';
    print "meat with {$preapration} !!!";


