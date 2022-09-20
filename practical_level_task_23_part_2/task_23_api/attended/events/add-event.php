<?php


require_once('../../db/config.php');

$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again.',
];

try {
    $query = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (!isset($_POST['user_id']) || $_POST['user_id'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'User id can not be empty.';
        } elseif (!isset($_POST['event_name']) || $_POST['event_name'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Event name can not be empty.';
        } elseif (!isset($_POST['event_id']) || $_POST['event_id'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Event id can not be empty.';
        }else {

            $query = "INSERT INTO attended_events (user_id, event_name,event_id) 
                VALUES ('{$_POST['user_id']}', '{$_POST['event_name']}','{$_POST['event_id']}')";
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

