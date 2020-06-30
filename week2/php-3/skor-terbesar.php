<?php
function skor_terbesar($arr){
    $classes = array_unique(array_column($arr,'kelas'));
    
    $highestScore = [];

    foreach($classes as $class){
        $highestScore[$class] = [];
        $temp = null;
        foreach($arr as $user){
            if($user['kelas'] === $class && $user['nilai'] > $temp['nilai']){
                $temp = $user;
            }
        }
        $highestScore[$class] = $temp;
    }

    foreach($arr as $user){
        $classes[] = $user['kelas'];
    }
    
    echo "<p></p>";
    echo "<pre>";
    print_r($highestScore);
    echo "</pre>";
}

// TEST CASES
$skor = [
    [
        "nama" => "Orang 1",
        "kelas" => "Laravel",
        "nilai" => "91",
    ],
    [
        "nama" => "Orang 2",
        "kelas" => "Laravel",
        "nilai" => "94",
    ],
    [
        "nama" => "Orang 3",
        "kelas" => "Laravel",
        "nilai" => "82",
    ],
    [
        "nama" => "Orang 4",
        "kelas" => "React Native",
        "nilai" => "82",
    ],
    [
        "nama" => "Orang 5",
        "kelas" => "React Native",
        "nilai" => "65",
    ],
    [
        "nama" => "Orang 6",
        "kelas" => "Laravel",
        "nilai" => "56",
    ],
    [
        "nama" => "Orang 7",
        "kelas" => "React JS",
        "nilai" => "90",
    ],
    [
        "nama" => "Orang 8",
        "kelas" => "React Native",
        "nilai" => "82",
    ],
    [
        "nama" => "Orang 9",
        "kelas" => "React Native",
        "nilai" => "65",
    ],
    [
        "nama" => "Orang 10",
        "kelas" => "Laravel",
        "nilai" => "96",
    ],
    [
        "nama" => "Orang 11",
        "kelas" => "React JS",
        "nilai" => "86",
    ],
    [
        "nama" => "Orang 12",
        "kelas" => "React Native",
        "nilai" => "92",
    ],
    [
        "nama" => "Orang 13",
        "kelas" => "React JS",
        "nilai" => "86",
    ],
    [
        "nama" => "Orang 14",
        "kelas" => "Laravel",
        "nilai" => "59",
    ],
    [
        "nama" => "Orang 15",
        "kelas" => "React JS",
        "nilai" => "76",
    ]
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/


?>