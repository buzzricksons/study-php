<?php


//
//    $a = array('a' => ['1', '2', '3'],
//        'b' => ['5','6']);
//
//    $b = array('a' => array('aa' => '1', 'bb' => '2', 'cc' => '3'),
//        'b' => array('aaa' => '1', 'bbb' => '2', 'ccc' => '3'));


//    } else if (is_array($responseData)) {
//    if (array_key_exists('Error', $responseData)) {
//        if ($name === '') {
//            $result = true;
//
//        } else if ($name === 'code') {
//            $result = $responseData['Error']['ErrorCode'];
//
//        } else if ($name === 'status_code') {
//            $result = $responseData['Error']['StatusCode'];
//
//        } else if ($name === 'message') {
//            $result = $responseData['Error']['Message'];
//
//        } else if ($name === 'detail') {
//            $result = $responseData['Error']['Detail'];
//        }
//    }
//}




//    print_r($b);
//    if (array_key_exists('b', $b)) {
//        print 'exist<br>';
//        print_r($b['b']);
//    } else {
//        print 'not exist';
//    }

//
//    $date = new DateTime();
//    $date->modify("last day of previous month");
//    echo $date->format("Y-m-d");
//
//    $date = new DateTime('now');
//    $date->modify('last day of this month');
//    echo $date->format('Y-m-d');
//


    $prev_month_first_day = new DateTime("first day of last month");
    $prev_month_last_day = new DateTime("last day of last month");

//    echo $month_ini->format('Y-m-d'); // 2012-02-01
//    echo $month_end->format('Y-m-d'); // 2012-02-29


    $last_month_start = date("Y-m-d", mktime(0, 0, 0, date("m")-1, 1,   date("Y")));
    $last_month_end = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-1,   date("Y")));

//    echo date('Y-m-d', strtotime('last day of previous month'));

    $start =date('Y-m-d', strtotime('first day of previous month'));
    $end = date('Y-m-d', strtotime('last day of previous month'));
    print $start."\n";
    print $end;

