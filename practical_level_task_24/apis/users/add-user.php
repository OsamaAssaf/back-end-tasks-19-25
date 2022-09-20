<?php

require_once('../db/config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(!isset($_POST['full_name']) || $_POST['full_name'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Full name cannot be empty';
        echo json_encode($output);
        return;
    }elseif (!isset($_POST['email']) || $_POST['email'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Email cannot be empty';
    }elseif (!isset($_POST['username']) || $_POST['username'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Username cannot be empty';
    }elseif (!isset($_POST['phone_number']) || $_POST['phone_number'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Phone number cannot be empty';
    }elseif (!isset($_POST['location']) || $_POST['location'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Location cannot be empty';
    } else{
        try {
            $query = "SELECT id FROM users WHERE email = '{$_POST['email']}'";
            $result = $conn->query($query);
            if($result->num_rows === 1){
                $output['flag'] = 0;
                $output['msg'] = 'Email already exist.';
                echo json_encode($output);
                return;
            }

            $query = "INSERT INTO users (full_name,email,username,phone_number,location) 
                VALUES ('{$_POST['full_name']}','{$_POST['email']}','{$_POST['username']}','{$_POST['phone_number']}','{$_POST['location']}')";
            $result = $conn->query($query);
            $output['flag'] = 1;
            $output['msg'] = 'Success';
        }
        catch (Exception $e) {
            echo json_encode($output);
        } finally {
            $conn->close();
        }
    }
    echo json_encode($output);

}




