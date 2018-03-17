<?php

function soma(int ...$valores):float{ //casting

    return array_sum($valores);

}

echo var_dump(soma(2, 2));
echo "<br>";
echo soma(25, 23);
echo "<br>";
echo soma(5.2, 26.1);
echo "<br>";
?>