<?php


require_once('../db/config.php');

$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again.',
];

try {
    $query = "";


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (!isset($_POST['title']) || $_POST['title'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Title can not be empty.';
        } elseif (!isset($_POST['description']) || $_POST['description'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Description can not be empty.';
        } elseif (!isset($_POST['date']) || $_POST['date'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Date can not be empty.';
        }elseif (!isset($_POST['price']) || $_POST['price'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Price can not be empty.';
        }
        elseif (!isset($_POST['image_url']) || $_POST['image_url'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'You must choose an image.';
        }else {

            $query = "INSERT INTO courses (title, description,date,price ,image) VALUES ('{$_POST['title']}', '{$_POST['description']}','{$_POST['date']}','{$_POST['price']}','{$_POST['image']}')";
            $result = $conn->query($query);


            $output['flag'] = 1;
            $output['msg'] = 'Success';
        }
    }
    echo json_encode($output);
} catch (Exception $e) {
    echo json_encode($output) . '<br>' . $e;
} finally {
    $conn->close();
}

