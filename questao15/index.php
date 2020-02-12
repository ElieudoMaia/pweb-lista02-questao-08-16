<?php

    $linhas = $_GET['linhas'];
    $colunas = $_GET['colunas'];

    echo '<table style="border: 2px solid black">';

    for($i=1; $i<=$linhas; $i++) {

        echo '<tr>';

        for($j=1; $j<=$colunas; $j++) {
            echo "<td style=\"border: 2px solid black; padding: 15px;\">Linha $i, Coluna $j</td>";
        }

        echo '<tr>';

    }

    echo '<table>';

?>