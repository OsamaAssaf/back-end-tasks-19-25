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
        }  elseif (!isset($_POST['experience']) || $_POST['experience'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Experience can not be empty.';
        }elseif (!isset($_POST['image_url']) || $_POST['image_url'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Image url can not be empty.';
        } else {

            $query = "INSERT INTO jobs (title, experience,image_url) VALUES ('{$_POST['title']}','{$_POST['experience']}','{$_POST['image_url']}')";
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

