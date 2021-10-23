<?php include './connection.php';
$Nama = $_POST['name'];
$Password = $_GET['password'];

$sql = "insert into siswa (username, password) values ('". $Nama ."','". $Password ."')";
$result = mysqli_query($conn, $sql);
if ($result) {
        echo 'Success create Account';  
} else {
        printf ('failed create Account: ' . mysqli_errno($conn));
        exit();
}     