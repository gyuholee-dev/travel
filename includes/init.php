<?php // init.php

// 글로벌 변수
global $DB;
global $PAGE;
global $TITLE;

// DB 환경변수
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'travel'; // TODO: 데이터베이스 이름 결정 요망
$DB = mysqli_connect($host, $user, $pass, $database);
