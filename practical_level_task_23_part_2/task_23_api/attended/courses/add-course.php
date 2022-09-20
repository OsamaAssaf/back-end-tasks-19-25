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
        } elseif (!isset($_POST['course_name']) || $_POST['course_name'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Course name can not be empty.';
        } elseif (!isset($_POST['course_id']) || $_POST['course_id'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Course id can not be empty.';
        }elseif (!isset($_POST['payment_states']) || $_POST['payment_states'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Payment states can not be empty.';
        }
        elseif (!isset($_POST['paid_states']) || $_POST['paid_states'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Paid states can not be empty.';
        }elseif (!isset($_POST['attended_states']) || $_POST['attended_states'] === '') {
            $output['flag'] = 0;
            $output['msg'] = 'Attended states can not be empty.';
        }else {

            $query = "INSERT INTO attended_courses (user_id, course_name,course_id,payment_states ,paid_states,attended_states) 
VALUES ('{$_POST['user_id']}', '{$_POST['course_name']}','{$_POST['course_id']}','{$_POST['payment_states']}','{$_POST['paid_states']}','{$_POST['attended_states']}')";
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

