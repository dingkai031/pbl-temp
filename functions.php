<?php

include_once("helpers.php");
$koneksi = mysqli_connect(DB_CREDENTIALS['hostname'], DB_CREDENTIALS['username'], DB_CREDENTIALS['password'], DB_CREDENTIALS['dbname']);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

function isLoggedIn():bool {
    return isset($_SESSION['id']);
}

function pageBuilder(string $content, string $template_name, array $data):void {
    $data = $data;
    include_once("views/templates/$template_name/header.php");
    include_once("views/$content");
    include_once("views/templates/$template_name/footer.php");
    die();
}

function submitButton(string $button_name, string $theme_color = "primary"):string {
    return "
    <button class=\"submit-button btn btn-$theme_color\">
        <span class=\"submit-button-spinner spinner-border spinner-border-sm d-none\" role=\"status\"></span>
        <span class=\"submit-button-text\">$button_name</span>
    </button>";
}

function PHPRedirect(string $url):void {
    header("Location: ".$url);
}

function routeGuard(int $level, $cb):void {
    if (!isLoggedIn()) die(PHPRedirect(ROOT_URL));
    if ($_SESSION['level'] != $level) die(PHPRedirect(ROOT_URL));
    if (!is_callable($cb)) throw new Exception("Parameter is not function");
    $cb();
}

function escapeNestedArray($array) {
    foreach ($array as &$value) {
        if (is_array($value)) {
            $value = escapeNestedArray($value);
        } else {
            $value = htmlspecialchars($value);
        }
    }
    unset($value);
    return $array;
}

function dateToday():string {
    return date("Y-m-d H:i:s");
}

$mysqlOutput = function (string $query) use($koneksi) {
    try {
        $result = mysqli_query($koneksi, $query);
        if (is_bool($result)) return $result;
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }catch (Exception $e) {
        return mysqli_error($koneksi);
    }
};

class Router {
    public static function get($cb):void {
        // GET = Ingin menampilkan halaman website
        if ($_SERVER['REQUEST_METHOD'] === "GET") {
            if (!is_callable($cb)) throw new Exception("Parameter is not function");
            $cb();
        }
    }
    public static function post($cb):void {
        // ingin memasukkan data ke dalam database
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            if (!is_callable($cb)) throw new Exception("Parameter is not function");
            $cb();
        }
    }
}

?>