<?php

function palindrome_angka($angka) {
    $angka++;

    if($angka >= 0 && $angka <=9)
    {
        // Angka 0 - 9 otomatis palindrome
        // return angka sekarang
        return $angka;
    } else
    {
        //Cek jika bukan 0-9
        $is_palindrome = true;

        $toString = strval($angka);
        for ($i=0; $i < strlen($toString); $i++) { 
            if($toString[$i] !== $toString[0 - ($i+1)])
                $is_palindrome = false;
        }

        if(!$is_palindrome)
            return palindrome_angka($angka);
        else
            return $angka;

    }
}

// TEST CASES
echo palindrome_angka(8), "<br>"; // 9
echo palindrome_angka(10), "<br>"; // 11
echo palindrome_angka(117), "<br>"; // 121
echo palindrome_angka(175), "<br>"; // 181
echo palindrome_angka(1000), "<br>"; // 1001
echo palindrome_angka(2005), "<br>"; // 1001

?>