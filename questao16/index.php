<?php

    $number = $_GET['number'];

    for($i=0; $i<10; $i++) {
        $res = $i*$number;
        echo "<p>$i x $number = $res</p>";

    }

?>