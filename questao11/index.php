<?php

    echo '<table style="border: 2px solid black">';

    for($i=1; $i<=10; $i++) {

        echo '<tr>';

        for($j=1; $j<=5; $j++) {
            echo "<td style=\"border: 2px solid black; padding: 15px;\">Linha $i, Coluna $j</td>";
        }

        echo '<tr>';

    }

    echo '<table>';

?>