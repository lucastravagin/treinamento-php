<?php 
    $a = 1;
    $b = 2;
    echo $a;

    function soma() {
        $a = 3;
        $b = 5;
        echo $GLOBALS['a']+ $GLOBALS['b'];
    };

    echo "Resultado: ";
    soma();

    echo "<br /> Depois da função: $a";
?>