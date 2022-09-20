<?php

require_once('../db/config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        $query = "SELECT * FROM users";
        $result = $conn->query($query);
        $users = [];
        if($result->num_rows === 0){
            $output['flag'] = 0;
            $output['msg'] = 'No users found.';
        }else{
            while ($user = $result->fetch_assoc()) {
                $users[] = $user;
            }
            $output['flag'] = 1;
            $output['msg'] = 'Success';
            $output['users'] = $users;
        }
        echo json_encode($output);
    } catch (Exception $e) {
        echo json_encode($output);
    } finally {
        $conn->close();
    }

}




