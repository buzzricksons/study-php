<?php
    /**
     * Created by IntelliJ IDEA.
     * User: HyungCheol Kim
     * Date: 2018/05/04
     * Time: 17:58
     */
    function p_header() {
        print "head!\n";
    }

    p_header();
    print "execute\n";
    p_footer();
    p_header2('red');
    p_header2();

    function p_footer() {
        print "foot!\n";
    }

    function p_header2($color = 'yellow') {
        print "color is $color\n";
    }

    $dinner = 'hambuger';
    function a_dinner() {
        $dinner = 'bugerking';
        print $dinner."\n";
        print $GLOBALS['dinner']."\n";
        $GLOBALS['dinner'] = 'rice';
        print $GLOBALS['dinner']."\n";
        $GLOBALS['dinner'].= 'kimchi';
        print $GLOBALS['dinner']."\n";
    }
    a_dinner();

    $dinner2 = 'cola';
    function b_dinner() {
        global $dinner2;
        print "before:$dinner2\n";
        $dinner2 = 'water';
        print "after:$dinner2\n";
    }
    b_dinner();