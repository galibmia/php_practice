<?php
define("DB_name", "C:\\Projects\\php\\php_practice\\item_crud/file/data.txt");

function seed()
{
    $students = array(
        array(
            'id' => 1,
            'name' => 'Galib Mia',
            'email' => 'engr.galibmia@gmail.com',
            'roll' => 12
        ),
        array(
            'id' => 2,
            'name' => 'Sadia Meem',
            'email' => 'sadia@gmail.com',
            'roll' => 10
        ),
        array(
            'id' => 3,
            'name' => 'Afroza Akter',
            'email' => 'afroza@gmail.com',
            'roll' => 11
        ),
        array(
            'id' => 4,
            'name' => 'Rostom Ali',
            'email' => 'rostom@gmail.com',
            'roll' => 13
        ),
        array(
            'id' => 5,
            'name' => 'Tarikul Islam',
            'email' => 'tarikul@gmail.com',
            'roll' => 14
        )
    );
    $data = serialize($students);
    file_put_contents(DB_name, $data, LOCK_EX);
}

function displayData()
{
    $serializedData =  file_get_contents(DB_name);
    $students = unserialize($serializedData);
    foreach ($students as $student) {
        $id = $student['id'];
        echo "<tr>";
        printf("<td>%s</td>", $student['name']);
        printf("<td>%s</td>", $student['email']);
        printf("<td>%s</td>", $student['roll']);
        printf("<td><a href='/index.php?task=edit&id={$id}'><button class='button-edit'>Edit</button></a>   <a href='/index.php?task=delete&id={$id}'><button class='button-danger'>Delete</button></a></td>");
        echo "</tr>";
    }
}

function addStudent($name, $email, $roll)
{
    $serializedData =  file_get_contents(DB_name);
    $students = unserialize($serializedData);
    $newId = maxId() + 1;
    foreach ($students as $_student) {
        if ($_student['email'] == $email && $_student['roll'] == $roll) {
            return 3;
            break;
        } elseif ($_student['email'] == $email) {
            return 2;
            break;
        } elseif ($_student['roll'] == $roll) {
            return 1;
            break;
        }
    }

    $student = array(
        'id' => $newId,
        'name' => $name,
        'email' => $email,
        'roll' => $roll

    );
    $students[] = $student;
    $data = serialize($students);
    file_put_contents(DB_name, $data, LOCK_EX);
}
function updateStudent($id, $name, $email, $roll)
{
    $serializedData =  file_get_contents(DB_name);
    $students = unserialize($serializedData);
    foreach ($students as $_student) {
        if ($_student['roll'] == $roll && $_student['id'] != $id) {
            return 1;
            break;
        }
    }
    $students[$id - 1]['name'] = $name;
    $students[$id - 1]['email'] = $email;
    $students[$id - 1]['roll'] = $roll;
    $data = serialize($students);
    file_put_contents(DB_name, $data, LOCK_EX);
}

function deleteStudent($id){
    $serializedData =  file_get_contents(DB_name);
    $students = unserialize($serializedData);
    foreach ($students as $offset => $student) {
        if ($student['id'] == $id) {
            unset($students[$offset]);
            $data = serialize($students);
            file_put_contents(DB_name, $data, LOCK_EX);
            return;
        }
    }
}


function maxId()
{
    $serializedData = file_get_contents(DB_name);
    $students = unserialize($serializedData);
    $ids = [];
    foreach ($students as $studentArray) {
        $ids[] = $studentArray['id'];
    }
    return max($ids);
}


function getStudent($id)
{
    $serializedData = file_get_contents(DB_name);
    $students = unserialize($serializedData);
    foreach ($students as $student) {
        if ($student['id'] == $id) {
            return $student;
        }
    }
    return false;
}


function getData(){
    $serializedData =  file_get_contents(DB_name);
    $students = unserialize($serializedData);
    return $students;
}