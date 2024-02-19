<?php
$fileName = "C:\\Projects\\php\\php_practice/file/file2.txt";

// $fp = fopen($fileName, 'w');
// fwrite($fp, "My name is Galib. \n");

// $data = ["My name Galib Mia.\n"];
// $data2 = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio eaque repudiandae, alias amet dolores sequi non reprehenderit recusandae omnis cupiditate? Error voluptatibus sint veniam praesentium ipsam beatae aperiam magnam, cumque culpa! Soluta eligendi aliquid beatae ullam alias culpa in accusantium, adipisci nisi vero commodi perferendis earum, voluptatem officiis exercitationem officia?";

// file_put_contents($fileName, $data);
// file_put_contents($fileName, $data2, FILE_APPEND | LOCK_EX); // LOCK_EX means 1 user can write this file at a time. // FILE_APPEND means write from the last of the previous data.



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


// $fp = fopen($fileName, "a");

// foreach($students as $student){
//     fputcsv($fp, $student);
// }

// fclose($fp);





$student = array(
    'name' => 'Rostom',
    'roll' => 16,
    'class' => 'Graduation'
);

// $fp = fopen($fileName, "a");
// fputcsv($fp, $student);

$fp = fopen($fileName, 'r');

while($student = fgetcsv($fp)){
    // $student = explode(",", $data);
    printf("Name = %s \nRoll = %s \nClass = %s\n\n", $student[0],$student[1],$student[2],);
}

// $data = file($fileName);
// unset($data[1]);
// print_r($data);
// $fp = fopen($fileName, "w");
// foreach($data as $line){
//     fwrite($fp, $line);
// }
// fclose($fp);