<?php

include_once("config.php");
include_once("functions.php");

session_start();

//get root url
$root_url_without_http = $_SERVER['HTTP_HOST'];
// check if project is in sub directory of htdocs or not
$htdocs = inHTDOCS ? "/".basename(dirname(__FILE__))."/" : "";
// check if current environment is development or production
if (PRODUCTION_STATE) {
    DEFINE("ROOT_URL", "https://" . $root_url_without_http) . $htdocs;
}else {
    DEFINE("ROOT_URL", "http://" . $root_url_without_http . $htdocs);
}

// set default timezome
date_default_timezone_set("Asia/Jakarta");


?>
