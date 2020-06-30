<?php
function ubah_huruf($string){
    $alphabet = array(
        'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'
    );

    $newString = '';
    for ($i=0; $i < strlen($string); $i++) { 
        $newString .= $alphabet[array_search($string[$i], $alphabet) + 1];
    }

    return $newString . "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu

?>