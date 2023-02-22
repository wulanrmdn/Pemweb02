<?php
// Array index
$animals = ['Kambing', 'Kucing', 'Ayam'];

//akses array
//echo $animals[1];

//aksess array
// echo $animals[0] . "<br>";
// echo $animals[1] . "<br>";
// echo $animals[2];

foreach($animals as $animal){
    echo $animal .  '<br>';
}


// array assosiatif
$student = [
    'name' => 'Wulan R Munawaroh',
    'major' => 'Informatics',
    'age' => 20
];

echo $student['name'];