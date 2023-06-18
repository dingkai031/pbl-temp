<?php

include_once("helpers.php");

$request_raw = $_SERVER['REQUEST_URI'];
$request_raw = str_replace($htdocs, "", $request_raw);

$request = explode("?", $request_raw)[0];
//split the path by '/'
$params = explode("/", $request);
// echo ROOT_URL;
$url_identified = false;

$page_array[1] = "login";
$page_array[2] = "alumni";
$page_array[3] = "perusahaan";
$page_array[4] = "export-kuesioner";
$page_array[5] = "kuesioner-awal";
$page_array[6] = "kuesioner-lanjutan";
$page_array[7] = "riwayat-kerja";
$page_array[8] = "lowongan-kerja";
$page_array[400] = "logout";

if ("" == $params[0]) {
  // home page
  $url_identified = true;
  $select_index_id = 0;
} else {
  $flipped_page_array = array_flip($page_array);
  if (in_array($params[0], $page_array)) {
    $select_index_id = $flipped_page_array[$params[0]];
    $url_identified = true;
  }
}
if (!$url_identified) $select_index_id = 404;

switch ($select_index_id) {
  case 0:
    Router::get(function(){
      if (isLoggedIn()) {
        // user has loggedin - show levels home page
        if ($_SESSION['level'] === "1") {
          $data = [
            "page-name" => WEBSITE_NAME." - ADMIN",
            "page" => "home"
          ];
          pageBuilder("admin/home.php", "admin", $data);
        }elseif($_SESSION['level'] === "2") {
          
        }elseif($_SESSION['level'] === "3") {
          $data = [
            "page-name" => WEBSITE_NAME." - ALUMNI",
            "page" => "home"
          ];
          pageBuilder("alumni/home.php", "alumni", $data);
        }
      }else {
        // show home page
        $data = [
          "page-name" => WEBSITE_NAME
        ];
        pageBuilder("home.php", "template1", $data);
      }
    });
    break;
  case 1:
    Router::get(function(){
      if (!isLoggedIn()) {
        $data = [
          "page-name" => WEBSITE_NAME." - LOGIN"
        ];
        pageBuilder("login.php", "template1", $data);
      }else {
        PHPRedirect(ROOT_URL);
        die();
      }
    });
    Router::post(function() use($koneksi) {
      require_once('server/login.php');
    });
    break;
  case 2 :
    Router::get(function() use($mysqlOutput){
      routeGuard('1', function() use($mysqlOutput){
        $userAlumni = $mysqlOutput("SELECT * FROM user WHERE level = '3'");
        $id_mahasiswa = array_column($userAlumni, 'id_mahasiswa');
        $id_mahasiswa_string = implode(",", $id_mahasiswa);
        $alumniArray = $mysqlOutput("SELECT * FROM mahasiswa WHERE id_mahasiswa IN ($id_mahasiswa_string)");
        // sort userAlumni and alumniArray by id_mahasiswa
        array_multisort($id_mahasiswa, SORT_ASC, $userAlumni);
        array_multisort(array_column($alumniArray, 'id_mahasiswa'), SORT_ASC, $alumniArray);
        foreach ($alumniArray as $alumni_key => $alumni) {
          $alumniArray[$alumni_key]['user_data'] = $userAlumni[$alumni_key];
        }
        $data = [
          "page-name" => WEBSITE_NAME." - ALUMNI",
          "page" => "alumni",
          "alumniArray" => $alumniArray,
        ];
        pageBuilder("admin/alumni.php", "admin", $data);
      });
    });
    break;
  case 3 :
    Router::get(function(){
      routeGuard('1', function(){
        $data = [
          "page-name" => WEBSITE_NAME." - PERUSAHAAN",
          "page" => "perusahaan"
        ];
        pageBuilder("admin/perusahaan.php", "admin", $data);
      });
    });
    break;
  case 4 :
    die("under maintenance");
    break;
  case 5 :
    Router::get(function(){
      if (!isLoggedIn()) {
        $data = [
          "page-name" => WEBSITE_NAME." - KUESIONER"
        ];
        pageBuilder("kuesioner.php", "template1", $data);
      }else {
        PHPRedirect(ROOT_URL);
        die();
      }
    });
    Router::post(function() use($koneksi, $mysqlOutput) {
      if (!isLoggedIn()) {
        require_once('server/add-kuesioner-1.php');
      }else {
        PHPRedirect(ROOT_URL);
        die();
      }
    });
    break;
  case 6 :
    Router::get(function() use($mysqlOutput){
      routeGuard('3', function() use($mysqlOutput){
        $data = [
          "page-name" => WEBSITE_NAME." - KUESIONER LANJUTAN",
          "page" => "kuesioner-lanjutan",
        ];
        pageBuilder("alumni/kuesioner-lanjutan.php", "alumni", $data);
      });
    });
    break;
  case 7 :
    Router::get(function() use($mysqlOutput){
      routeGuard('3', function() use($mysqlOutput){
        $data = [
          "page-name" => WEBSITE_NAME." - Riwayat Kerja",
          "page" => "riwayat-kerja",
        ];
        pageBuilder("alumni/riwayat-kerja.php", "alumni", $data);
      });
    });
  case 8 :
    Router::get(function() use($mysqlOutput){
      routeGuard('3', function() use($mysqlOutput){
        $data = [
          "page-name" => WEBSITE_NAME." - Lowongan Kerjaan",
          "page" => "lowongan-kerja",
        ];
        pageBuilder("alumni/lowongan-kerja.php", "alumni", $data);
      });
    });
    break;
  case 400:
    session_destroy();
    PHPRedirect(ROOT_URL);
    break;  
  default:
    http_response_code(404);
    echo "url not found";
}



?>
 

