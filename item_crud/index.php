<?php
require_once "function.php";
$task = $_GET['task'] ?? 'view';
$error = 0;
if ('seed' == $task) {
    seed();
    $info = "Seeding complete";
}
if ('delete' == $task) {
    $id = filter_input(INPUT_GET, 'id');
    deleteStudent($id);
    header('location: /index.php?task=view');
}

$name = '';
$email = '';
$roll = '';
if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name',);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $roll = filter_input(INPUT_POST, 'roll', FILTER_SANITIZE_NUMBER_INT);
    $id = filter_input(INPUT_GET, 'id');
    if ($id) {
        if ($name != '' && $email != '' && $roll != '') {
            $result = updateStudent($id, $name, $email, $roll);
            if (1 == $result) {
                $error = 1;
            } elseif (2 == $result) {
                $error = 2;
            } elseif (3 == $result) {
                $error = 3;
            } else {
                header('location: /index.php?task=view');
                exit();
            }
        }
    } else {
        if ($name != '' && $email != '' && $roll != '') {
            $result = addStudent($name, $email, $roll);
            if (1 == $result) {
                $error = 1;
            } elseif (2 == $result) {
                $error = 2;
            } elseif (3 == $result) {
                $error = 3;
            } else {
                header('Location: /index.php?task=view');
                exit();
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        .container {
            margin-top: 30px;
        }

        .center {
            text-align: center;
        }

        a {
            font-size: 20px;
        }

        .danger {
            background-color: red;
            border: 2px solid red;
            color: aliceblue;
        }


        .button-danger {
            background-color: transparent;
            border: 2px solid red;
            color: red;
        }

        .button-danger:hover {
            background-color: red;
            border: 2px solid red;
        }

        .button-edit {
            background-color: transparent;
            border: 2px solid #00926c;
            color: #00926c;
        }

        .button-edit:hover {
            background-color: #00926c;
            border: 2px solid #00926c;
        }
        .warning{
            font-size: 10px;
            color: red;
            margin-top: -10px;
        }
    </style>
</head>

<body>
    <div class="container center">
        <div class="row">
            <div class="column column-50 column-offset-25">
                <h1>CRUD Operation</h1>
                <nav><a href="/index.php?task=view">All Students | </a><a href="/index.php?task=add">Add Student | </a><a href="">Seed</a></nav>

                <?php if ('seed' == $task) {
                    echo "<pre>{$info}</pre>";
                }

                if (1 == $error) {
                    echo  "<pre class='danger'>  Duplicate Roll found</pre>";
                } elseif (2 == $error) {
                    echo  "<pre class='danger'>  Duplicate Email found</pre>";
                } elseif (3 == $error) {
                    echo  "<pre class='danger'>  Duplicate Email and Roll found</pre>";
                }  ?>
            </div>
        </div>
    </div>
    <?php if ('view' == $task) : ?>
        <div class="container">
            <div class="row">
                <div class="column">
                    <table>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roll Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php displayData(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if ('add' == $task) : ?>
        <div class="container">
            <div class="row">
                <div class="column column-50 column-offset-25">
                    <form method="post" action="/index.php?task=add">
                        <fieldset>
                            <label for="name">Name</label>
                            <input type="text" placeholder="Enter Your Name" id="name" name="name">
                            <label for="name">Email</label>
                            <input type="email" placeholder="Enter Your Email" id="email" name="email">
                            <label for="roll">Roll Number</label>
                            <input type="number" placeholder="Enter Your Roll" id="roll" name="roll">
                            
                            <input class="button-primary" type="submit" name="submit" value="Save">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if ('edit' == $task) :
        $id = filter_input(INPUT_GET, 'id');
        $student = getStudent($id);
        if ($student) :
    ?>
            <div class="container">
                <div class="row">
                    <div class="column column-50 column-offset-25">
                        <form method="post">
                            <fieldset>
                                <input type="hidden" placeholder="Enter Your Name" id="name" name="name" value="<?php echo $student['id'] ?>">
                                <label for="name">Name</label>
                                <input type="text" placeholder="Enter Your Name" id="name" name="name" value="<?php echo $student['name'] ?>">
                                <label for="name">Email</label>
                                <input type="email" placeholder="Enter Your Email" id="email" name="email" value="<?php echo $student['email'] ?>">
                                <label for="roll">Roll Number</label>
                                <input type="number" placeholder="Enter Your Roll" id="roll" name="roll" value="<?php echo $student['roll'] ?>">
                                <input class="button-primary" type="submit" name="submit" value="Save">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
    <?php endif;
    endif; ?>




</body>

</html>