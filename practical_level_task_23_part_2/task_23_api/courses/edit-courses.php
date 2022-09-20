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
            $query = "UPDATE courses SET title = '{$_POST['title']}' WHERE id = '{$_POST['id']}'";
            $result = $conn->query($query);
        }

        if (isset($_POST['description']) && $_POST['description'] !== '') {
            $query = "UPDATE courses SET description = '{$_POST['description']}' WHERE id = '{$_POST['id']}'";
            $result = $conn->query($query);
        }
        if (isset($_POST['date']) && $_POST['date'] !== '') {
            $query = "UPDATE courses SET date = '{$_POST['date']}' WHERE id = '{$_POST['id']}'";
            $result = $conn->query($query);
        }
        if (isset($_POST['price']) && $_POST['price'] !== '') {
            $query = "UPDATE courses SET price = '{$_POST['price']}' WHERE id = '{$_POST['id']}'";
            $result = $conn->query($query);
        }

        if (isset($_POST['image_url']) && $_POST['image_url'] !== '') {
            $query = "UPDATE courses SET image_url = '{$_POST['image_url']}' WHERE id = '{$_POST['id']}'";
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

