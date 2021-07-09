<?php
include_once './connect.php';

print_r($_POST);
$control1 = (int)$_POST['control1'];
$control2 = (int)$_POST['control2'];
$control3 = (int)$_POST['control3'];
$control4 = (int)$_POST['control4'];
$control5 = (int)$_POST['control5'];
$control6 = (int)$_POST['control6'];
if (isset($_POST['running'])) $running = 'on';
else $running = 'off';

$sql = 'SELECT * FROM arm ORDER BY ID DESC LIMIT 1;';
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) > 0) {
    $sql = "UPDATE arm SET control1 = '$control1', control2 = '$control2', control3 = '$control3', control4 = '$control4', control5 = '$control5', control6 = '$control6', running = '$running' WHERE id = 1;";
}
else {
    $sql = "INSERT INTO arm (control1, control2, control3, control4, control5, control6, running) 
    VALUES ('$control1', '$control2', '$control3', '$control4', '$control5', '$control6', '$running');";
}

if (mysqli_query($connect, $sql)) {
    header("Location: ../index.php?Sucess");
} else {
    echo "Error";
    print_r($connect->error_list);
}

