<?php

require_once('../db/config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again'
];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        $query = "SELECT * FROM snacks";
        $result = $conn->query($query);
        $snacks = [];
        if($result->num_rows === 0){
            $output['flag'] = 0;
            $output['msg'] = 'No snacks found.';
        }else{
            while ($snack = $result->fetch_assoc()) {
                $snacks[] = $snack;
            }
            $output['flag'] = 1;
            $output['msg'] = 'Success';
            $output['snacks'] = $snacks;
        }
        echo json_encode($output);
    } catch (Exception $e) {
        echo json_encode($output);
    } finally {
        $conn->close();
    }

}




