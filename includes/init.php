<?php // init.php

// 사이트 정보
global $INFO;

// 환경변수
global $DB;
global $PAGE;
global $ACT;
global $CODE;
global $DO;


// 사이트 정보
$INFO = [
  'title'=>'블라썸투어',
  'subtitle'=>'여행을 즐기는 방법',
  'description'=>'블라썸투어는 여행을 즐기는 방법을 소개합니다.',
  'author'=>'블라썸투어',
];

// DB
/* if ($_SERVER['HTTP_HOST']=='localhost') {
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
$DB = mysqli_connect($host, $user, $pass, $database); */

/* 리퀘스트
page: main, about, tour, contact, etc...
action 액션: list, item...
code: 상품코드
do 실행: 
  item&do=view
          edit
          delete
*/
$PAGE = isset($_REQUEST['page'])?$_REQUEST['page']:'top';
$ACT = isset($_REQUEST['action'])?$_REQUEST['action']:'list';
$DO = isset($_REQUEST['action'])?$_REQUEST['action']:'view';
$CODE = isset($_REQUEST['code'])?$_REQUEST['code']:'00000000';
