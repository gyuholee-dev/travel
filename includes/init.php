<?php // init.php
// 함수
require_once 'includes/functions.php';

// 로그
global $MSG;

// 사이트 정보
global $INFO;

// 환경변수
global $DB;
global $PAGE;
global $ACT;
global $CODE;
global $DO;

// 로그
$MSG = ['class'=>'', 'log'=>''];

// DB 접속
if ($_SERVER['HTTP_HOST']=='localhost') {
  // 서버가 로컬호스트일 경우 기본 DB 설정파일을 불러옴
  $dbConfig = json_decode(file_get_contents('configs/db.localhost.json'),true);
} else {
  // 서버가 cafe24일 경우 cafe24 DB 설정파일을 불러옴
  $dbConfig = json_decode(file_get_contents('configs/db.cafe24.json'),true);
}
// DB 접속. 오류는 $MSG에 기록됨
connectDB($dbConfig);

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
