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
        $query = "SELECT * FROM news LIMIT " . $limit;
    } else {
        $query = "SELECT * FROM news";
    }

    $result = $conn->query($query);
    $news = [];
    if ($result->num_rows === 0) {
        $output['flag'] = 0;
        $output['msg'] = 'There is no news.';
    } else {
        while ($item = $result->fetch_assoc()) {
            $news[] = $item;
        }
        $output['flag'] = 1;
        $output['msg'] = 'Success';
        $output['news'] = $news;
    }

    echo json_encode($output);
} catch (Exception $e) {
    echo json_encode($output);
} finally {
    $conn->close();
}

