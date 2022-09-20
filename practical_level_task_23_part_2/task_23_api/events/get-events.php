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
        $query = "SELECT * FROM events LIMIT " . $limit;
    } else {
        $query = "SELECT * FROM events";
    }

    $result = $conn->query($query);
    $events = [];
    if ($result->num_rows === 0) {
        $output['flag'] = 0;
        $output['msg'] = 'There is no events.';
    } else {
        while ($item = $result->fetch_assoc()) {
            $events[] = $item;
        }
        $output['flag'] = 1;
        $output['msg'] = 'Success';
        $output['events'] = $events;
    }

    echo json_encode($output);
} catch (Exception $e) {
    echo json_encode($output);
} finally {
    $conn->close();
}

