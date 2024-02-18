<?php

$fileName = "C:\Projects\php\php_practice/file.txt";

if (is_readable($fileName)) {
    $fp = fopen($fileName, 'r');

    while ($line = fgets($fp)) {
        echo $line;
    }

    fclose($fp);

    $data = file($fileName);
    print_r($data);
    $data1 = file_get_contents($fileName);
    echo $data1;
}
