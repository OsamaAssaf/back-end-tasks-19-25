<?php


require_once('../db/config.php');

$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again.',
];

try {
    $query = "";


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {


        if (isset($_POST['policy_text']) && $_POST['policy_text'] !== '') {
            $query = "UPDATE policy SET policy_text = '{$_POST['policy_text']}' WHERE id = '{$_POST['id']}'";
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

