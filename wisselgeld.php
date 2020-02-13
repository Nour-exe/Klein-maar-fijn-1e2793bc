<?php 

$inputField =  (round ($argv[1] , 2));

define ("MUNTGELD" ,  ([50, 20, 10, 5, 2, 1, 0.50 , 0.20 , 0.10 , 0.05, 0.01 ]));




foreach ( MUNTGELD as $moneyValue ){
    $moneyValue = $moneyValue;
    $moneyValue = ($moneyValue);
    if (floor($inputField / $moneyValue) > 0) {
        $amount = floor($inputField / $moneyValue);
        echo $amount . "x" . $moneyValue. PHP_EOL;
        $inputField = $inputField - ($amount * $moneyValue);
      
    }
}


?>