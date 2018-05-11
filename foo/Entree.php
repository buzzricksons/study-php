<?php
/**
 * Created by IntelliJ IDEA.
 * User: luke
 * Date: 2018/05/11
 * Time: 17:39
 */

class Entree {
    public $name;
    public $ingredients = array();

    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this -> ingredients);
    }
}