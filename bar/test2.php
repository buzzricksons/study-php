<?php



    $last_month_start = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
    $last_month_end = mktime(0, 0, 0, date("m"), date("d")-1,   date("Y"));

    print $last_month_start;
    print $last_month_end;





