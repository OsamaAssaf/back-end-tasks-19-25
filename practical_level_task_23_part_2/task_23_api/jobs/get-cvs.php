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
        $query = "SELECT * FROM CVs LIMIT " . $limit;
    } else {
        $query = "SELECT * FROM CVs";
    }

    $result = $conn->query($query);
    $cvs = [];
    if ($result->num_rows === 0) {
        $output['flag'] = 0;
        $output['msg'] = 'There is no CVs.';
    } else {
        while ($item = $result->fetch_assoc()) {
            $cvs[] = $item;
        }
        $output['flag'] = 1;
        $output['msg'] = 'Success';
        $output['CVs'] = $cvs;
    }

    echo json_encode($output);
} catch (Exception $e) {
    echo json_encode($output);
} finally {
    $conn->close();
}

