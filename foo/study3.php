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

function p_footer() {
    print "foot!\n";
}

function p_header2($color) {
    print "color is $color\n";
}
