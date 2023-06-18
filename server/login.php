<?php

$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

/* Send error to Fetch API, if unexpected content type */
if ($contentType !== "application/json")
    die(json_encode([
        'value' => 0,
        'error' => 'Content-Type is not set as "application/json"',
        'data' => null,
    ]));

$content = trim(file_get_contents("php://input"));
$decoded = json_decode($content, true);

$username = mysqli_escape_string($koneksi, trim($decoded['username']));
$password = mysqli_escape_string($koneksi, $decoded['password']);

// find user in the database
$query_find_user = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($koneksi, $query_find_user);

if (mysqli_num_rows($result) > 0) {
    $user_data = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];
    if (password_verify($password, $user_data['password'])) {
        $_SESSION['id'] = $user_data['user_id'];
        if ($user_data['id_mahasiswa'] != "") $_SESSION['id_mahasiswa'] = $user_data['id_mahasiswa'];
        if ($user_data['id_perusahaan'] != "") $_SESSION['id_perusahaan'] = $user_data['id_perusahaan'];
        $_SESSION['username'] = $user_data['username'];
        $_SESSION['email'] = $user_data['email'];
        $_SESSION['level'] = $user_data['level'];
        die(json_encode(['status' => "success", "message" => "login success"]));
    }else {
        die(json_encode(['status' => "failed", "message" => "wrong username or password"]));
    }
}else {
    die(json_encode(['status' => "failed", "message" => "wrong username or password"]));
}
