<?php
function pasangan_terbesar($angka){
    $angkaString = strval($angka);

    $terbesar = 0;
    for ($i=0; $i < strlen($angkaString)-1; $i++) { 
        // Temp variabel 2 angka
        if($i != strlen($angkaString) -1)
            $temp = $angkaString[$i] . $angkaString[$i+1];
            
        if($temp > $terbesar)
            $terbesar = $temp;
    }

    return "<p>" . $terbesar . "</p>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>