<?php
/**
 * Created by IntelliJ IDEA.
 * User: luke
 * Date: 2018/05/11
 * Time: 17:40
 */
require 'Entree.php';

$soup = new Entree('chicken soup', array('chicken', 'water'));
//$soup = new Entree;
//$soup->name = 'chicken soup';
//$soup->ingredients = array('chicken', 'water');

$sand = new Entree('chicken sand', array('chicken', 'bread'));
//$sand = new Entree;
//$sand->name = 'chicken sand';
//$sand->ingredients = array('chicken', 'bread');

foreach(['chicken', 'lemon', 'bread', 'water'] as $ing) {
    if ($soup->hasIngredient($ing)) {
        print "soup detail:$ing.\n";
    }

    if ($sand->hasIngredient($ing)) {
        print "sand detail:$ing.\n";
    }
}

$sizes = sizeof(Entree::getSizes());
print "sizes: $sizes.\n";

