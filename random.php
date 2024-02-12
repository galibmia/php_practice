<?php
$numbers = range(1, 100);
$count = count($numbers);


$random = mt_rand(0, 1);
$result = $numbers[$random];
if($random == 0){
    echo "Head";
}else{
    echo "Tail"; 
}