<?php
include_once './connect.php';

$movment = $_POST['movment'];
print_r($_POST);

$sql = "SELECT * from base";
$result = mysqli_query($connect, $sql);

if(mysqli_num_rows($result) > 0) {
    $sql = "UPDATE base SET movment = '$movment' where id = 1;";
}
else {
    $sql = "INSERT INTO base(movment) values('$movment');";
    
}

if(mysqli_query($connect, $sql)) {
    header("Location: ../index.php");
}
else {
    echo "Error";
    print_r($connect->error_list);
}