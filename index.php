<?php

class Money
{
    public $billet10 = 0;
    public $billet5 = 0;
    public $piece2 = 0;
}

$moneyBack = rand(0, 100);

$money = new Money();
moneyBack($money, $moneyBack);


function moneyBack($money, $moneyBack) {

    // Calculating the number of note of 10
    $count = 0;
    while ($moneyBack >= 10) {

        $moneyBack = $moneyBack - 10;
        $count++;

    }
    $money->billet10 = $count;

    // Calculating the number of note of 5 only if $moneyBack is odd to insure right calculation
    $count = 0;
    if ($moneyBack % 2 == 1) {

        while ($moneyBack >= 5) {

            $moneyBack = $moneyBack - 5;
            $count++;

        }
        $money->billet5 = $count;
    }

    $count = 0;
    while ($moneyBack >= 2) {

        $moneyBack = $moneyBack - 2;
        $count++;

    }
    $money->piece2 = $count;

    if ($moneyBack != 0) {

        echo "Impossible de rendre la monnaie";

    } else {

        echo (
            "Vous devez rendre " .
            $money->billet10 .
            " billets de 10, " .
            $money->billet5 .
            " billets de 5 et " .
            $money->piece2 .
            " pièces de 2."
        );

    }

}








