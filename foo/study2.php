<?php
$vegetables1 = array('corn' => 'yellow','beet' => 'red', 'carrot' => 'orange');
$vegetables2 = ['corn' => 'yellow','beet' => 'red', 'carrot' => 'orange'];
print $vegetables1['corn'].PHP_EOL;
print $vegetables2['corn'].PHP_EOL;
print count($vegetables2).PHP_EOL;

foreach ($vegetables1 as $k => $v) {
    print "$k:$v\n";
}

$vegetables3 = array('sweet', 'lemon', 'mario');
foreach ($vegetables3 as $v2) {
    print "value:$v2\n";
}
print implode(',', $vegetables1)."\n";

$color = 'yellow, red, blue, puple';
$color_list = explode(',', $color);
print "second is$color_list[1]\n";


unset($vegetables2['beet']);
foreach ($vegetables2 as $k => $v) {
    print "vegetables2>$k:$v\n";
}

for ($i = 0, $num = count($vegetables3); $i < $num; $i++) {
    print "count:$i, value:$vegetables3[$i]\n";
}

print array_key_exists('corn', $vegetables1)."\n";
print array_key_exists('corn1', $vegetables1)."\n";

print in_array('yellow', $vegetables1)."\n";
print in_array('yellow2', $vegetables1)."\n";

print array_search('yellow', $vegetables1)."\n";
print array_search('yellow2', $vegetables1)."\n";

$meals = array('breakfast' => ['macmorning', 'coffee'], 'lunch' => ['bread', 'cola']
,'dinner' => ['steak', 'beer']);

print "multiple array: ".$meals['lunch'][1]."\n";
