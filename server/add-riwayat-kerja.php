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

die(json_encode($decoded_escaped));

$query_add_loker = "INSERT INTO loker (id_perusahaan, posisi, tingkat_pengalaman, created_at, updated_at) VALUES ('".$_SESSION['id_perusahaan']."', '".$decoded_escaped['posisi']."', '".$decoded_escaped['tingkat-pengalaman']."', '".dateToday()."', '".dateToday()."')";

if ($response = $mysqlOutput($query_add_loker)) {
    die(json_encode(['status' => "success", "message" => "Loker added"]));
}else {
    die(json_encode(['status' => "failed", "message" => $response ]));
}

?>