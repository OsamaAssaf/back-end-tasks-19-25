<?php


require_once('../db/config.php');

$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again.',
];

try {
    $query = "";


//    $_SERVER['REQUEST_METHOD'] = 'POST';
//    $_POST['id'] = '880';
//    $_POST['full_name'] = 'Amani Assaf';
//    $_POST['email'] = 'osama.assaf.55@gmail.com';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['email'])) {
            $query = "SELECT id FROM users WHERE email = '{$_POST['email']}'";
            $result = $conn->query($query);
            if ($result->num_rows !== 0) {
                $output['flag'] = 0;
                $output['msg'] = 'Email already exist.';
                echo json_encode($output);
                return;
            }
            $query = "UPDATE users SET email = '{$_POST['email']}' WHERE id = '{$_POST['id']}'";
            $result = $conn->query($query);
        }

        if (isset($_POST['full_name'])) {
            $query = "UPDATE users SET full_name = '{$_POST['full_name']}' WHERE id = '{$_POST['id']}'";
            $result = $conn->query($query);
        }

        if (isset($_POST['username'])) {
            $query = "UPDATE users SET username = '{$_POST['username']}' WHERE id = '{$_POST['id']}'";
            $result = $conn->query($query);
        }

        if (isset($_POST['phone_number'])) {
            $query = "UPDATE users SET phone_number = '{$_POST['phone_number']}' WHERE id = '{$_POST['id']}'";
            $result = $conn->query($query);
        }

        if (isset($_POST['date_of_birth'])) {
            $query = "UPDATE users SET date_of_birth = '{$_POST['date_of_birth']}' WHERE id = '{$_POST['id']}'";
            $result = $conn->query($query);
        }

        $output['flag'] = 1;
        $output['msg'] = 'Success';

    }
    echo json_encode($output);
} catch (Exception $e) {
    echo json_encode($output);
} finally {
    $conn->close();
}

