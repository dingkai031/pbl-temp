<?php

include_once "helpers.php";

// untuk masukin user perusahaan

$id_perusahaan = ""; //id_perusahaan, masukin dulu secara manual di database
$username = ""; //test008
$password = ""; //password031
$email= ""; //test@gmail.como
$level= "2"; 

$query = "INSERT INTO user (level, id_perusahaan, username, password, email, created_at, updated_at) VALUES ('$level','$id_perusahaan', '$username', '".password_hash($password, PASSWORD_BCRYPT)."', '$email', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')";
if (mysqli_query($koneksi, $query)) {
    echo "user $username berhasil ditambahkan";
}else {
    echo "error ".mysqli_error($koneksi);
}

// ===============================untuk masukin admin
// $username = ""; //test008
// $password = ""; //password031
// $email= ""; //test@gmail.como
// $level= "1";

// $query = "INSERT INTO user (level, username, password, email, created_at, updated_at) VALUES ('$level', '$username', '".password_hash($password, PASSWORD_BCRYPT)."', '$email', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')";
// if (mysqli_query($koneksi, $query)) {
//     echo "user $username berhasil ditambahkan";
// }else {
//     echo "error ".mysqli_error($koneksi);
// }


?>