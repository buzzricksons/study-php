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

        public function __construct($name, $ingredients) {
            if(!is_array($ingredients)) {
                throw new Exception('$ingredient is not array');

            }
            $this->name = $name;
            $this->ingredients = $ingredients;
        }

        public function hasIngredient($ingredient) {
            return in_array($ingredient, $this -> ingredients);
        }

        public static function getSizes() {
            return array('small', 'medium', 'big');
        }
    }