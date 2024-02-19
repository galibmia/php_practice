<?php
// Access the file.
$fileName = "C:\\Projects\\php\\php_practice/file/file4.txt";

$students = array(
    array(
        'name' => 'Galib',
        'roll' => 12,
        'class' => 'Graduation'
    ),
    array(
        'name' => 'Sadia',
        'roll' => 86,
        'class' => 'Graduation'
    ),
    array(
        'name' => 'Afroza',
        'roll' => 15,
        'class' => 'Graduation'
    ),

);

$name = "Galib Mia";

// $encodeData = json_encode($students);
// file_put_contents($fileName, $encodeData, LOCK_EX);

// $data = file_get_contents($fileName);
// $allStudents = json_decode($data, true);
// print_r($allStudents);

// $nameEncode = json_encode($name);
// $fp = fopen($fileName, "a");
// fwrite($fp, $nameEncode);


$data = file_get_contents($fileName);
$allStudents = json_decode($data);
print_r($allStudents);