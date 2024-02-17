<!-- 
************************
*****PHP Code Here*****
************************
--><?php
include_once "function.php";
$task = 'encode';

if(isset($_GET['task']) && $_GET['task']!=''){
    $task = $_GET['task'];
}
$key = 'abcdefghijklmnopqrstuvwxyz1234567890';
if('key'==$task){
    $keyOriginal = str_split($key);
    shuffle($keyOriginal);
    $key=join('', $keyOriginal);
}else if(isset($_POST['key']) && $_POST['key']!=''){
    $key = $_POST['key'];
}

$scrambleData ='';
if('encode' == $task){
    $data = $_POST['data'] ?? '';
    if($data != ''){
        $scrambleData = encodeData($data, $key);
    }
}

if('decode' == $task){
    $data = $_POST['data'] ?? '';
    if($data != ''){
        $scrambleData = decodeData($data, $key);
    }
}

?>
<!-- 
************************
*****HTML File Here*****
************************
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Scrambling</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin-top: 50px;
        }
        #data, #result{
            width: 100%;
            height: 160px;
            resize: none;
        }
        .hidden{
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h1>Data Scramble</h1>
                <p>Use this application to scramble your data.</p>
                <p>
                    <a href="scrambling.php?task=encode">Encode</a> |
                    <a href="scrambling.php?task=decode">Decode</a> |
                    <a href="scrambling.php?task=key">Generate key</a>
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="column column-60 column-offset-20">
                    <form method="POST" action="scrambling.php<?php if('decode' == $task) {echo "?task=decode"; }?>">
                        <fieldset>
                            <label for="key">Key</label>
                            <input type="text" name="key" id="key" <?php displayKey($key); ?>>

                            <label for="data">Data</label>
                            <textarea name="data" id="data"><?php if(isset($_POST['data'])){
                                echo $_POST['data'];
                            } ?></textarea>

                            <label for="result">Result</label>
                            <textarea name="result" id="result"><?php echo $scrambleData; ?></textarea>

                            <input class="button-primary" type="submit" value="Submit">
                        </fieldset>
                    </form>
                </div>
            </div>
</body>
</html>