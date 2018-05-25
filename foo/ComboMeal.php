<?php
    /**
     * Created by IntelliJ IDEA.
     * User: luke
     * Date: 2018/05/25
     * Time: 16:23
     */

    class ComboMeal extends Entree {
        public function hasIngredient($ingredient) {
            foreach ($this -> ingredients as $entree) {
                if ($entree -> hasIngredient($ingredient)) {
                    return true;
                }
            }
            return false;
        }
    }