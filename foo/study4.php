<?php
    /**
     * Created by IntelliJ IDEA.
     * User: luke
     * Date: 2018/05/09
     * Time: 18:17
     */

    function restaurant_check($meal, $tax, $tip) {
        $tax_amount = $meal * ($tax / 100);
        $tip_amount = $meal * ($tip / 100);
        $total_amount = $meal + $tax_amount + $tip_amount;

        return $total_amount;
    }

    function payment_method($cash_on_hand, $amount) {
        if ($amount > $cash_on_hand) {
            return 'credit card';
        } else {
            return 'cash';
        }
    }