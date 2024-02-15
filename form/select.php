<?php
include_once "functions.php";
$fruits = ['Apple', 'Mango', 'Banana', 'Orange', 'Lemon'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <h1>Select Your Fruits</h1>
                <p>
                    <?php
                    if (isset($_POST['fruits'])) {
                        $selectedFruits = $_POST['fruits'];
                        if (count($selectedFruits) > 0) {
                            echo "You have selected: " . join(", ", $selectedFruits);
                        } else {
                            echo "No fruits selected.";
                        }
                    }
                    ?>

                </p>
                <form method="POST">
                    <fieldset>
                        <label for="fruits">Fruits</label>
                        <select style="height: 200px;" id="fruits" name="fruits[]" multiple>
                            <option value="" disabled selected>Select fruits</option>
                            <?php
                            if (isset($fruits) && is_array($fruits)) {
                                addOptions($fruits, $selectedFruits);
                            } else {
                                echo "Error: No fruits available.";
                            }
                            ?>
                        </select>
                        <input class="button-primary" type="submit" value="Submit">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>

</html>