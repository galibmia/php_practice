<?php
/**
 * define supported formate of files.
 * check is the file is defined or not.
 * Calculate the number of files.
 * loop through the files and check in array uploaded file formate match with the supported formats.
 * move the uploaded files into the folder name @file.
*/


$allowedType = array(      
    'image/jpeg',
    'image/jpg',
    'image/JPG',
    'image/png'
);

if (isset($_FILES['photo']) && $_FILES['photo']) {
    $totalFile = $_FILES['photo']['name'];
    $totalFileCount = count($totalFile);
    for ($i = 0; $i < $totalFileCount; $i++) {
        if (in_array($_FILES['photo']['type'][$i], $allowedType)) {
            move_uploaded_file($_FILES['photo']['tmp_name'][$i], "./files/" . $_FILES['photo']['name'][$i]);
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST" enctype="multipart/form-data"> <!-- enctype="multipart/form-data" means form has allowed to submit multiple file-->
                    <fieldset>
                        <label for="fName">First Name</label>
                        <input type="text" name="fName" placeholder="First Name" id="fname">

                        <label for="lName">Last Name</label>
                        <input type="text" name="lName" placeholder="Last Name" id="lName">

                        <label for="photo">Photos</label>
                        <!-- photo[] means photo is an array and it will take multiple file as input-->
                        <input type="file" name="photo[]" id="photo"><br>
                        <input type="file" name="photo[]" id="photo"><br>
                        <input type="file" name="photo[]" id="photo"><br>

                        <input class="button-primary" type="submit" value="Submit">
                    </fieldset>
                </form>
            </div>
        </div>
</body>

</html>