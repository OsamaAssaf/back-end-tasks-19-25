<?php


require_once('../db/config.php');

$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again.',
];

try {
    $query = "";


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {


        if (isset($_POST['title']) && $_POST['title'] !== '') {
            $query = "UPDATE events SET title = '{$_POST['title']}' WHERE id = '{$_POST['id']}'";
            $result = $conn->query($query);
        }

        if (isset($_POST['date']) && $_POST['date'] !== '') {
            $query = "UPDATE events SET date = '{$_POST['date']}' WHERE id = '{$_POST['id']}'";
            $result = $conn->query($query);
        }

        $output['flag'] = 1;
        $output['msg'] = 'Success';

    }
    echo json_encode($output);
} catch (Exception $e) {
    echo json_encode($output);
} finally {
    $conn->close();
}

