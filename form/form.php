<?php
include_once "functions.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
                <h1>Sign Up</h1>
                <p>Provide your information and signup for free.</p>
                <?php
                $checked = '';
                if (isset($_REQUEST['cb1']) && $_REQUEST['cb1'] == 1) {
                    $checked = 'checked';
                }

                ?>

                <p>
                    <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) : ?>
                        First Name: <?php echo htmlspecialchars($_REQUEST['fname']); ?> <br>
                    <?php endif; ?>
                    <?php if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) : ?>
                        Last Name: <?php echo htmlspecialchars($_REQUEST['lname']); ?> <br>
                    <?php endif; ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="firstName">First Name</label>
                    <input type="text" name="fname" placeholder="First Name" id="firstName">
                    <label for="lastName">Last Name</label>
                    <input type="text" placeholder="Last Name" name="lname" id="lastName">
                    <div>
                        <input type="checkbox" id="cb1" name="fruits[]" value="orange" <?php isChecked('fruits', 'orange') ?>>
                        <label class="label-inline" for="cb1">Orange</label><br>
                        <input type="checkbox" id="cb2" name="fruits[]" value="mango" <?php isChecked('fruits', 'mango') ?>>
                        <label class="label-inline" for="cb2">Mango</label><br>
                        <input type="checkbox" id="cb3" name="fruits[]" value="banana" <?php isChecked('fruits', 'banana') ?>>
                        <label class="label-inline" for="cb3">Banana</label><br>
                        <input type="checkbox" id="cb4" name="fruits[]" value="lemon" <?php isChecked('fruits', 'lemon') ?>>
                        <label class="label-inline" for="cb4">Lemon</label><br>
                    </div>
                    <input class="button-primary" type="submit" value="Submit">
                </form>
            </div>
        </div>

    </div>
</body>

</html>