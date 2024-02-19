<?php
// Access the file.
$fileName = "C:\\Projects\\php\\php_practice/file/file3.txt";

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

// Serialize the data
$data =serialize($students);
// Put the data into the file
file_put_contents($fileName, $data, LOCK_EX);

// Get the data from file
$dataFromFile = file_get_contents($fileName);
// Unserialize the data
$allStudents = unserialize($dataFromFile);
// Print the data
print_r($allStudents);

// Declare new variable
$student = array(
    'name' => 'Rostom',
    'roll' => 16,
    'class' => 'Graduation'
);

// Push the new array into the previous data
array_push($allStudents, $student);
// Serialize the data
$data =serialize($students);
// Put the data into the file
file_put_contents($fileName, $data, LOCK_EX);

// Unset element from data (Delete)
unset($allStudents[2]);
// Serialize the data
$data =serialize($students);
// Put the data into the file
file_put_contents($fileName, $data, LOCK_EX);




?>