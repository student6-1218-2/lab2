<?php
echo "<link rel='stylesheet' href='css/styles.css'>";
    $lowerLimit = 1;
    $upperLimit = 9;

    for ($i = 1; $i <= $upperLimit; $i++){
        for ($j = $lowerLimit; $j <= $upperLimit; $j++){
            $multi[$i][$j] = $i*$j;
        }
    }

    echo '<table>';
    foreach ($multi as $multipyer1 => $auxMultiplyer){
        echo '<tr>';
        echo "<td>{$multipyer1}</td>";
        foreach ($auxMultiplyer as $multipyer2 => $value){
            echo "<td>{$multipyer1}x{$multipyer2}={$value}</td>";
        }
        echo '</tr>';
    }