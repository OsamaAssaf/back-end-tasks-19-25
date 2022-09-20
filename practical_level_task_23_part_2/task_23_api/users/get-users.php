<?php


require_once('../db/config.php');


$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again.'
];

try {

    $query = "";
    if (isset($_GET['limit'])) {
        $limit = $_GET['limit'];
        $query = "SELECT * FROM users LIMIT " . $limit;
    } else {
        $query = "SELECT * FROM users";
    }


    $result = $conn->query($query);
    $users = [];
    if ($result->num_rows === 0) {
        $output['flag'] = 0;
        $output['msg'] = 'There is no users.';
    } else {
        while ($item = $result->fetch_assoc()) {
            $users[] = $item;
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

