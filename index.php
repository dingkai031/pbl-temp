<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once("helpers.php");

$request_raw = $_SERVER['REQUEST_URI'];
$request_raw = str_replace($htdocs, "", $request_raw);

$request = explode("?", $request_raw)[0];
// user/12312312?tanggal=25&bulan=07
//split the path by '/'
$params = explode("/", $request);
// echo ROOT_URL;
$url_identified = false;

$page_array[1] = "login";
$page_array[2] = "alumni";
$page_array[3] = "perusahaan";
$page_array[4] = "export-kuesioner";
$page_array[5] = "kuesioner-awal";
$page_array[6] = "kuesioner-lanjutan-intro";
$page_array[7] = "riwayat-kerja";
$page_array[8] = "lowongan-kerja";
$page_array[9] = "kuesioner-perusahaan-intro";
$page_array[10] = "lowongan-kerjaan-perusahaan";
$page_array[11] = "kuesioner-perusahaan";
$page_array[12] = "kuesioner-lanjutan";
$page_array[400] = "logout";
$page_array[401] = "email-support";

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
  case 0: //homepage
    Router::get(function() use($mysqlOutput){
      if (isLoggedIn()) {
        // user has loggedin - show levels home page
        if ($_SESSION['level'] === "1") {
          $data = [
            "page-name" => WEBSITE_NAME." - ADMIN",
            "page" => "home"
          ];
          pageBuilder("admin/home.php", "admin", $data);
        }elseif($_SESSION['level'] === "2") {
          $getLoggedInPerusahaanData = $mysqlOutput("SELECT * fROM perusahaan WHERE id_perusahaan='".$_SESSION['id_perusahaan']."'")[0];
          $data = [
            "page-name" => WEBSITE_NAME." - PERUSAHAAN",
            "page" => "home",
            "perusahaan_data" => $getLoggedInPerusahaanData
          ];
          pageBuilder("perusahaan/home.php", "perusahaan", $data);
        }elseif($_SESSION['level'] === "3") {
          $getLoggedInAlumniData = $mysqlOutput("SELECT * fROM mahasiswa WHERE id_mahasiswa='".$_SESSION['id_mahasiswa']."'")[0];
          $data = [
            "page-name" => WEBSITE_NAME." - ALUMNI",
            "page" => "home",
            "alumni_data" => $getLoggedInAlumniData
          ];
          pageBuilder("alumni/home.php", "alumni", $data);
        }
      }else {
        // show home page
        $data = [
          "page-name" => WEBSITE_NAME,
          "page" => "home"
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
    Router::get(function() use($mysqlOutput){
      routeGuard('1', function() use($mysqlOutput){
        $userPerusahaan = $mysqlOutput("SELECT * FROM user WHERE level = '2'");
        $id_perusahaan = array_column($userPerusahaan, 'id_perusahaan');
        $id_perusahaan_string = implode(",", $id_perusahaan);
        $perusahaanArray = $mysqlOutput("SELECT * FROM perusahaan WHERE id_perusahaan IN ($id_perusahaan_string)");
        // sort userPerusahaan and perusahaanArray by id_perusahaan
        array_multisort($userPerusahaan, SORT_ASC, $id_perusahaan);
        array_multisort($perusahaanArray, SORT_ASC, array_column($perusahaanArray, 'id_perusahaan'));
        foreach ($perusahaanArray as $perusahaan_key => $perusahaan) {
          $perusahaanArray[$perusahaan_key]['user_data'] = $userPerusahaan[$perusahaan_key];
        }
        $data = [
          "page-name" => WEBSITE_NAME." - PERUSAHAAN",
          "page" => "perusahaan",
          "perusahaanArray" => $perusahaanArray,
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
          "page-name" => WEBSITE_NAME." - KUESIONER",
          "page" => "kuesioner-awal"
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
        $findNextKuesioner = $mysqlOutput('SELECT id_kuesioner FROM kuesioner WHERE JSON_EXTRACT(jawaban_kuesioner, "$.kuesioner_lanjutan") IS NOT NULL');
        if (count($findNextKuesioner) > 0) {
          $isDoneFillingSecondSurvey = true;
        }else {
          $isDoneFillingSecondSurvey = false;
        }
        $data = [
          "page-name" => WEBSITE_NAME." - KUESIONER LANJUTAN",
          "page" => "kuesioner-lanjutan-intro",
          "done-second-survey" => $isDoneFillingSecondSurvey
        ];
        pageBuilder("alumni/kuesioner-lanjutan-intro.php", "alumni", $data);
      });
    });
    break;
  case 7 :
    Router::get(function() use($mysqlOutput){
      routeGuard('3', function() use($mysqlOutput){
        $allRiwayatKerja = $mysqlOutput("SELECT rk.*, p.nama_perusahaan FROM riwayat_kerja rk INNER JOIN perusahaan p on rk.id_perusahaan = p.id_perusahaan WHERE id_user='".$_SESSION['id']."'");
        $allPerusahaan = $mysqlOutput("SELECT id_perusahaan, nama_perusahaan FROM perusahaan");
        $data = [
          "page-name" => WEBSITE_NAME." - Riwayat Kerja",
          "page" => "riwayat-kerja",
          "riwayatKerja" => $allRiwayatKerja,
          "allPerusahaan" => $allPerusahaan
        ];
        pageBuilder("alumni/riwayat-kerja.php", "alumni", $data);
      });
    });
    Router::post(function() use($mysqlOutput){
      routeGuard('3', function() use($mysqlOutput){
        include_once("server/add-riwayat-kerja.php");
      });
    });
    break;
  case 8 :
    Router::get(function() use($mysqlOutput){
      routeGuard('3', function() use($mysqlOutput){
        $allLoker = $mysqlOutput("SELECT l.*, p.nama_perusahaan, p.email_perusahaan, p.telp_perusahaan, p.alamat_perusahaan, p.created_at AS p_created_at, p.updated_at as p_updated_at, p.deleted_at as p_deleted_at FROM loker l INNER JOIN perusahaan p on l.id_perusahaan = p.id_perusahaan");
        $data = [
          "page-name" => WEBSITE_NAME." - Lowongan Kerjaan",
          "page" => "lowongan-kerja",
          "allLoker" => $allLoker,
        ];
        pageBuilder("alumni/lowongan-kerja.php", "alumni", $data);
      });
    });
    break;
  case 9 :
    Router::get(function() use($mysqlOutput){
      routeGuard('2', function() use($mysqlOutput){
        // $findKuesioner = $mysqlOutput('SELECT id_kuesioner FROM kuesioner WHERE id_perusahaan=\''.$_SESSION['id_perusahaan'].'\'');
        // if (count($findKuesioner) > 0) {
        //   $isDoneFillingSurvey = true;
        // }else {
        //   $isDoneFillingSurvey = false;
        // }
        $data = [
          "page-name" => WEBSITE_NAME." - Kuesioner",
          "page" => "kuesioner-perusahaan-intro",
        ];
        pageBuilder("perusahaan/kuesioner-perusahaan-intro.php", "perusahaan", $data);
      });
    });
    break;
  case 10 :
    Router::get(function() use($mysqlOutput){
      routeGuard('2', function() use($mysqlOutput){
        $id_perusahaan = $_SESSION['id_perusahaan'];
        $loker = $mysqlOutput("SELECT * from loker WHERE id_perusahaan='$id_perusahaan'");
        $data = [
          "page-name" => WEBSITE_NAME." - Lowongan Kerjaan",
          "page" => "lowongan-kerjaan-perusahaan",
          "loker" => $loker
        ];
        pageBuilder("perusahaan/lowongan-kerjaan-perusahaan.php", "perusahaan", $data);
      });
    });
    Router::post(function() use($mysqlOutput){
      routeGuard('2', function() use($mysqlOutput){
        require_once "server/add-loker.php";
      });
    });
    break;
  case 11 :
    Router::get(function() use($mysqlOutput){
      routeGuard('2', function() use($mysqlOutput){
        $allAlumniThatWorkHere = $mysqlOutput("SELECT u.user_id, m.id_mahasiswa, m.nama_lengkap, rk.posisi FROM riwayat_kerja rk INNER JOIN user u on rk.id_user = u.user_id INNER JOIN mahasiswa m on u.id_mahasiswa = m.id_mahasiswa WHERE rk.id_perusahaan='".$_SESSION['id_perusahaan']."'");
        $data = [
          "page-name" => WEBSITE_NAME." - Kuesioner",
          "page" => "kuesioner-perusahaan-intro",
          "allAlumniData" => $allAlumniThatWorkHere
        ];
        pageBuilder("perusahaan/kuesioner-perusahaan.php", "perusahaan", $data);
      });
    });
    Router::post(function() use($mysqlOutput){
      routeGuard('2', function() use($mysqlOutput){
        require_once "server/add-kuesioner-perusahaan.php";
      });
    });
    break;
  case 12 :
    Router::get(function() use($mysqlOutput){
      routeGuard('3', function() use($mysqlOutput){
        $data = [
          "page-name" => WEBSITE_NAME." - Kuesioner Lanjutan",
          "page" => "kuesioner-lanjutan-intro"
        ];
        pageBuilder("alumni/kuesioner-lanjutan.php", "alumni", $data);
      });
    });
    Router::post(function() use($mysqlOutput){
      routeGuard('3', function() use($mysqlOutput){
        require_once "server/add-kuesioner-2.php";
      });
    });
    break;
  case 400:
    session_destroy();
    PHPRedirect(ROOT_URL);
    break;  
  case 401:
    include_once("vendor/autoload.php");
    $mail = new PHPMailer(true);
    include_once "server/send-email.php";
    break;  
  default:
    http_response_code(404);
    echo "url not found";
}

