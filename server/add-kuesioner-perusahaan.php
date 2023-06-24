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

// tambahkan hasil kuesioner ke database
$mysqlOutput("INSERT INTO kuesioner (id_perusahaan, jawaban_kuesioner, created_at, updated_at) VALUE ('".$_SESSION['id_perusahaan']."', '".json_encode(['feedback_alumni' => $all_answer])."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");

die(json_encode(['status' => 'success', 'Message' => "Terimakasih karena telah mengisi kuesioner"]));
