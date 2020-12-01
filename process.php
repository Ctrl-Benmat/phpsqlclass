<?php
include('connection.php');

if (isset($_POST['save'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $entry_date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO tbl_users (first_name, last_name,entry_date) VALUES('$first_name', '$last_name', '$entry_date' )";
    $result= $conn->query($sql);
    header('Location:user.php');
}
?>