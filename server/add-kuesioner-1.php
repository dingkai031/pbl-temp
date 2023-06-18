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
$decoded_escaped = escapeNestedArray($decoded);
$all_answer = $decoded_escaped['allAnswer'];
// check apakah nim terdaftar
$id_mahasiswa_result = $mysqlOutput("SELECT id_mahasiswa from mahasiswa WHERE nim='".$decoded_escaped['nim']."'");
if (count($id_mahasiswa_result) === 0) die(json_encode(['status' => 'error', 'pesan' => 'NIM tidak ditemukan harap periksa kembali NIM Anda']));

// check apakah mahasiswa sudah mengisi kuesioner awal
$id_mahasiswa = $id_mahasiswa_result[0]['id_mahasiswa'];
$id_kuesioner_result = $mysqlOutput("SELECT id_kuesioner from kuesioner WHERE id_mahasiswa='".$id_mahasiswa."'");
if (count($id_kuesioner_result) !== 0) die(json_encode(['status' => 'error', 'pesan' => 'Anda sudah mengisi kuesioner silahkan login']));

// tambahkan hasil kuesioner ke database
$mysqlOutput("INSERT INTO kuesioner (id_mahasiswa, jawaban_kuesioner, created_at, updated_at) VALUE ('$id_mahasiswa', '".json_encode(['kuesioner_awal' => $all_answer])."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");

// tambahkan user alumni ke database
$mysqlOutput("INSERT INTO user (id_mahasiswa, username, password, email, level, created_at, updated_at) VALUES ('$id_mahasiswa', '".$decoded_escaped['username']."', '".password_hash($decoded_escaped['password'], PASSWORD_BCRYPT)."', '".$decoded_escaped['email']."', '3', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");

die(json_encode(['status' => 'success', 'Message' => "Terimakasih karena telah mengisi kuesioner"]));
