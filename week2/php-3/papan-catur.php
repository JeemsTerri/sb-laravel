<?php

function papan_catur($angka) {
    echo "<p><pre>";
    for ($i=0; $i < $angka ; $i++) { 
        echo $i % 2 == 0 ? "#" : "&nbsp;";
        for ($j=1; $j < $angka; $j++) { 
            echo $i % 2 == 0 ? "&nbsp;#" : "#&nbsp;";
        }
        echo "<br>";
    }
    echo "</pre></p>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
*/

echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/