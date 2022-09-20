<?php


require_once('../db/config.php');

$output = [
    'flag' => 0,
    'msg' => 'Something went wrong, try again.',
];

try {
    $query = "";


    if (isset($_GET['limit'])) {
        $limit = $_GET['limit'];
        $query = "SELECT * FROM feedbacks LIMIT " . $limit;
    } else {
        $query = "SELECT * FROM feedbacks";
    }

    $result = $conn->query($query);
    $feedbacks = [];
    if ($result->num_rows === 0) {
        $output['flag'] = 0;
        $output['msg'] = 'There is no feedbacks.';
    } else {
        while ($item = $result->fetch_assoc()) {
            $feedbacks[] = $item;
        }
        $output['flag'] = 1;
        $output['msg'] = 'Success';
        $output['feedbacks'] = $feedbacks;
    }

    echo json_encode($output);
} catch (Exception $e) {
    echo json_encode($output);
} finally {
    $conn->close();
}

