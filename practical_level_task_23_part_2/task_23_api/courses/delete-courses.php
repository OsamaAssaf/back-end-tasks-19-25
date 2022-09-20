<?php


require_once('../db/config.php');

$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again.',
];

try {
    $query = "";


    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $query = "DELETE FROM courses WHERE id = '{$_POST['id']}'";
        $result = $conn->query($query);

        if((int)$result === 1){
            $output['flag'] = 1;
            $output['msg'] = 'Success';
        }
    }


    echo json_encode($output);
} catch (Exception $e) {
    echo json_encode($output);
} finally {
    $conn->close();
}

