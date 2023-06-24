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

$query_add_riwayat_kerja = "INSERT INTO riwayat_kerja (id_user, id_perusahaan, lama_kerja, posisi, penghasilan, created_at, updated_at) VALUES ('".$_SESSION['id']."', '".$decoded_escaped['id-perusahaan']."', '".$decoded_escaped['lama-kerja']."', '".$decoded_escaped['posisi']."', '".$decoded_escaped['penghasilan']."', '".dateToday()."', '".dateToday()."')";

if ($response = $mysqlOutput($query_add_riwayat_kerja)) {
    die(json_encode(['status' => "success", "message" => "Riwayat kerja ditambahkan"]));
}else {
    die(json_encode(['status' => "failed", "message" => $response ]));
}

?>