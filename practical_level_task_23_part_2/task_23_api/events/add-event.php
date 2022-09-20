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
        }  elseif (!isset($_POST['date']) || $_POST['date'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Date can not be empty.';
        } else {

            $query = "INSERT INTO events (title, date) VALUES ('{$_POST['title']}','{$_POST['date']}')";
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

