<?php
// This function will display the key.
function displayKey($key){
    printf("Value = '%s'", $key);

}

// This function will Encode the input data.
function encodeData($originalData, $key){
    $originalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($originalData);
    for($i=0; $i<$length; $i++){
        $currentChar = $originalData[$i];
        $position = strpos($originalKey, $currentChar);
        if($position !== false){
            $data .=$key[$position];
        } else{
            $data .= $currentChar;
        }
    }
    return $data;
}

// This function will decode the input data by the reference of Key.
function decodeData($originalData, $key){
    $originalKey = 'abcdefghijklmnopqrstuvwxyz1234567890';
    $data = '';
    $length = strlen($originalData);
    for($i=0; $i<$length; $i++){
        $currentChar = $originalData[$i];
        $position = strpos($key, $currentChar);
        if($position !== false){
            $data .=$originalKey[$position];
        } else{
            $data .= $currentChar;
        }
    }
    return $data;
}