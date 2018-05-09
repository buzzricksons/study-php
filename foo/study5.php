<?php
/**
 * Created by IntelliJ IDEA.
 * User: luke
 * Date: 2018/05/09
 * Time: 18:22
 */

require 'study4.php';

$total_bill = restaurant_check(25, 8.875, 20);

$cash = 30;

print "payment method is ".payment_method($cash, $total_bill);