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

// check apakah mahasiswa sudah mengisi kuesioner lanjutan
$id_kuesioner_result =  $mysqlOutput('SELECT id_kuesioner, jawaban_kuesioner FROM kuesioner WHERE JSON_EXTRACT(jawaban_kuesioner, "$.kuesioner_lanjutan") IS NOT NULL AND id_mahasiswa=\''.$_SESSION['id_mahasiswa'].'\'');
if (count($id_kuesioner_result) !== 0) die(json_encode(['status' => 'error', 'pesan' => 'Anda sudah mengisi kuesioner lanjutan']));

// ambil jawaban
$id_kuesioner_result =  $mysqlOutput('SELECT id_mahasiswa, jawaban_kuesioner FROM kuesioner WHERE id_mahasiswa=\''.$_SESSION['id_mahasiswa'].'\'');
$jawaban = json_decode($id_kuesioner_result[0]['jawaban_kuesioner'], true);
$jawaban['kuesioner_lanjutan'] = $decoded_escaped;

// update kuesioner ke database
$query = "UPDATE kuesioner SET jawaban_kuesioner='".json_encode($jawaban)."', updated_at='".dateToday()."' WHERE id_mahasiswa='".$_SESSION['id_mahasiswa']."'";
$result = $mysqlOutput($query);

die(json_encode(['status' => 'success', 'Message' => 'data addedd']));
