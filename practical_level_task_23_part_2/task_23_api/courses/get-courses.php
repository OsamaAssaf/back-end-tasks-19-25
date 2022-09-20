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
        $query = "SELECT * FROM courses LIMIT " . $limit;
    } else {
        $query = "SELECT * FROM courses";
    }

    $result = $conn->query($query);
    $courses = [];
    if ($result->num_rows === 0) {
        $output['flag'] = 0;
        $output['msg'] = 'There is no courses.';
    } else {
        while ($item = $result->fetch_assoc()) {
            $courses[] = $item;
        }
        $output['flag'] = 1;
        $output['msg'] = 'Success';
        $output['courses'] = $courses;
    }

    echo json_encode($output);
} catch (Exception $e) {
    echo json_encode($output);
} finally {
    $conn->close();
}

