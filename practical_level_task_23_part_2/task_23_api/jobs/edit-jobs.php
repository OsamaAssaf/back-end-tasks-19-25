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
            $query = "UPDATE jobs SET title = '{$_POST['title']}' WHERE id = '{$_POST['id']}'";
            $result = $conn->query($query);
        }

        if (isset($_POST['experience']) && $_POST['experience'] !== '') {
            $query = "UPDATE jobs SET experience = '{$_POST['experience']}' WHERE id = '{$_POST['id']}'";
            $result = $conn->query($query);
        }
        if (isset($_POST['image_url']) && $_POST['image_url'] !== '') {
            $query = "UPDATE jobs SET image_url = '{$_POST['image_url']}' WHERE id = '{$_POST['id']}'";
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

