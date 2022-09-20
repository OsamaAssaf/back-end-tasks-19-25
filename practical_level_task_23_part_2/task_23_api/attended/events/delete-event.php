<?php


require_once('../../db/config.php');

$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again.',
];

try {
    $query = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        if(!isset($_POST['user_id']) || $_POST['user_id'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'You must include user id with request.';
        }elseif(!isset($_POST['event_id']) || $_POST['event_id'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'You must include event id with request.';
        }

        else{
            $query = "DELETE FROM attended_events WHERE user_id = '{$_POST['user_id']}' AND event_id = '{$_POST['event_id']}'";
            $result = $conn->query($query);

            if((int)$result === 1){
                $output['flag'] = 1;
                $output['msg'] = 'Success';
            }
        }
    }


    echo json_encode($output);
} catch (Exception $e) {
    echo json_encode($output);
} finally {
    $conn->close();
}

