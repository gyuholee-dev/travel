<?php // init.php

// 글로벌 변수
global $DB;
global $PAGE;
global $TITLE;

// DB 환경변수
if ($_SERVER['HTTP_HOST']=='localhost') {
  // 서버가 로컬호스트일 경우 기본 DB 설정파일을 불러옴
  $dbConfig = json_decode(file_get_contents('configs/db.localhost.json'),true);
} else {
  // 서버가 cafe24일 경우 cafe24 DB 설정파일을 불러옴
  $dbConfig = json_decode(file_get_contents('configs/db.cafe24.json'),true);
}
$host = $dbConfig['host'];
$user = $dbConfig['user'];
$pass = $dbConfig['pass'];
$database = $dbConfig['database'];
$DB = mysqli_connect($host, $user, $pass, $database);
