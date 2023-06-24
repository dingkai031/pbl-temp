<?php

include_once "helpers.php";


$query = "INSERT INTO user (id_mahasiswa, username, full_name, password, email, created_at, updated_at) VALUES ('1', 'usersatu', 'user satu', '".password_hash('usersatu', PASSWORD_BCRYPT)."', 'usersatu@gmail.com', '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."')";
mysqli_query($koneksi, $query);


?>