<?php
    /**
     * Created by IntelliJ IDEA.
     * User: luke
     * Date: 2018/05/25
     * Time: 16:23
     */
    class ComboMeal extends Entree {
        public function __construct($name, $entrees) {
            parent::__construct($name, $entrees);
            foreach ($entrees as $entree) {
                if(!$entree instanceof Entree) {
                    throw new Exception('Object of $entrees must be Entree object.');
                }
            }
        }

        public function hasIngredient($ingredient) {
            foreach ($this -> ingredients as $entree) {
                if ($entree -> hasIngredient($ingredient)) {
                    return true;
                }
            }
            return false;
        }
    }