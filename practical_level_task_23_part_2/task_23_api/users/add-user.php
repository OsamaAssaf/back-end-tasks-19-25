<?php


require_once('../db/config.php');

$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again.',
];

try {
    $query = "";
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (!isset($_POST['full_name'])) {
            $output['flag'] = 0;
            $output['msg'] = 'Full name can not be empty.';
        } elseif (!isset($_POST['email'])) {
            $output['flag'] = 0;
            $output['msg'] = 'Email can not be empty.';
        } elseif (!isset($_POST['username'])) {
            $output['flag'] = 0;
            $output['msg'] = 'Username can not be empty.';
        } elseif (!isset($_POST['phone_number'])) {
            $output['flag'] = 0;
            $output['msg'] = 'Phone number can not be empty.';
        } elseif (!isset($_POST['date_of_birth'])) {
            $output['flag'] = 0;
            $output['msg'] = 'Date of birth can not be empty.';
        } else {
            $query = "SELECT id FROM users WHERE email = '{$_POST['email']}'";
            $result = $conn->query($query);
            if ($result->num_rows === 0) {
                $query = "INSERT INTO users (full_name, email,username,phone_number,date_of_birth) 
            VALUES ('{$_POST['full_name']}','{$_POST['email']}','{$_POST['username']}','{$_POST['phone_number']}','{$_POST['date_of_birth']}')";
                $result = $conn->query($query);
                $output['flag'] = 1;
                $output['msg'] = 'Success';
            } else {
                $output['flag'] = 0;
                $output['msg'] = 'Email is already exist.';
            }
        }
    }
    echo json_encode($output);
} catch (Exception $e) {
    echo json_encode($output);
} finally {
    $conn->close();
}

