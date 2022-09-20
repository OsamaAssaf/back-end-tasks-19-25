<?php

require_once('../db/config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(!isset($_POST['snack_name']) || $_POST['snack_name'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Snack name cannot be empty';
    }elseif (!isset($_POST['meal_price']) || $_POST['meal_price'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Meal price cannot be empty';
    }elseif (!isset($_POST['sandwich_price']) || $_POST['sandwich_price'] === ''){
        $output['flag'] = 0;
        $output['msg'] = 'Sandwich price cannot be empty';
    }else{
        if(!is_numeric($_POST['meal_price'])){
            $output['flag'] = 0;
            $output['msg'] = 'Meal price must be a number.';
            echo json_encode($output);
            return;
        }
        if(!is_numeric($_POST['sandwich_price'])){
            $output['flag'] = 0;
            $output['msg'] = 'Sandwich price must be a number.';
            echo json_encode($output);
            return;
        }
        try {
            $query = "SELECT id FROM snacks WHERE snack_name = '{$_POST['snack_name']}'";
            $result = $conn->query($query);
            if($result->num_rows === 1){
                $output['flag'] = 0;
                $output['msg'] = 'Snack already exist.';
                echo json_encode($output);
                return;
            }

            $query = "INSERT INTO snacks (snack_name,meal_price,sandwich_price) 
                VALUES ('{$_POST['snack_name']}','{$_POST['meal_price']}','{$_POST['sandwich_price']}')";
            $result = $conn->query($query);
            $output['flag'] = 1;
            $output['msg'] = 'Success';
        }
        catch (Exception $e) {
                echo $e . '<br>';
        } finally {
            $conn->close();
        }
    }
    echo json_encode($output);

}




