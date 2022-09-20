<?php


require_once('../db/config.php');

$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again.',
];

try {
    $query = "";


    $query = "SELECT * FROM policy";

    $result = $conn->query($query);
    $policy = [];
    while ($item = $result->fetch_assoc()) {
        $policy[] = $item;
    }
    $output['flag'] = 1;
    $output['msg'] = 'Success';
    $output['policy'] = $policy;

    echo json_encode($output);
} catch (Exception $e) {
    echo json_encode($output);
} finally {
    $conn->close();
}

