<?php

function count_elements($array)
{
    $element_count = array();
    foreach ($array as $element) {
        if (isset($element_count[$element])) {
            $element_count[$element]++;
        } else {
            $element_count[$element] = 1;
        }
    }
    return $element_count;
}

// Example array with duplicates
$string = $_POST['input'] ?? '';
$lowerString = strtolower($string);
$array = str_split($lowerString);

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
            margin: 30%;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        table {
            font-weight: bold;
            text-align: center;
        }

        td,
        th {
            border: 1px solid gray;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="POST">
                <label for="input">Enter Your string</label>
                <input type="text" name="input" placeholder="Enter String Here" id="input">
            </form>
        </div>
    </div>


    <table>
        <thead>
            <tr>
                <th>Character</th>
                <th>Count</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $element_count = count_elements($array);
            foreach ($element_count as $element => $count) {
                echo "<tr>";
                if(!empty($_POST['input'])){
                    echo "<td>$element</td>";
                    echo "<td>$count</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th id="total">Total</th>
                <td><?php echo strlen($string);?></td>
            </tr>
        </tfoot>
    </table>

</body>

</html>