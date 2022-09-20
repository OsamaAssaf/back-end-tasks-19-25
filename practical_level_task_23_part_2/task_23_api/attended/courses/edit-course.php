<?php


require_once('../../db/config.php');

$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again.',
];

try {
    $query = "";


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(!isset($_POST['user_id']) || $_POST['user_id'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'You must include user id with request.';
        }elseif(!isset($_POST['course_id']) || $_POST['course_id'] === ''){
            $output['flag'] = 0;
            $output['msg'] = 'You must include course id with request.';
        }else{
            if (isset($_POST['payment_states']) && $_POST['payment_states'] !== '') {
                $query = "UPDATE attended_courses SET payment_states = '{$_POST['payment_states']}' WHERE user_id = '{$_POST['user_id']}' AND course_id = '{$_POST['course_id']}'";
                $result = $conn->query($query);
            }
            if (isset($_POST['paid_states']) && $_POST['paid_states'] !== '') {
                $query = "UPDATE attended_courses SET paid_states = '{$_POST['paid_states']}' WHERE user_id = '{$_POST['user_id']}' AND course_id = '{$_POST['course_id']}'";
                $result = $conn->query($query);
            }
            if (isset($_POST['attended_states']) && $_POST['attended_states'] !== '') {
                $query = "UPDATE attended_courses SET attended_states = '{$_POST['attended_states']}' WHERE user_id = '{$_POST['user_id']}' AND course_id = '{$_POST['course_id']}'";
                $result = $conn->query($query);
            }

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

