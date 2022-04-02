<?php // init.php
// 초기화
require_once INC.'functions.php';
ini_set('display_errors', 'On');
mysqli_report(MYSQLI_REPORT_ALL);
session_start();

// 패스 상수 정의
// define('INC', 'includes/');
define('CONF', 'configs/');
define('TPL', 'templates/');

//글로벌 변수
global $MSG;
global $INFO;
global $CONF;
global $USER;
global $DB;
global $DBCONF;
global $PAGE;
global $ACT;
global $DO;

// 메시지
$MSG = [
  'info' => '',
  'success' => '',
  'error' => ''
];

// 설정파일 로드
$INFO = openJson(CONF.'info.json');
$CONF = openJson(CONF.'config.json');

// 로그인 체크
if (isset($_SESSION['key'])) {
  if (isset($_COOKIE['key']) && $_SESSION['key'] == $_COOKIE['key']) {
    $USER = $_SESSION['key'];
  } else {
    session_destroy();
    setcookie('key', '', time()-60);
  }
}

// DB 설정파일 로드
if ($_SERVER['HTTP_HOST']=='localhost') {
  $dbConfigFile = 'db.localhost.json';
} else {
  $dbConfigFile = 'db.cafe24.json';
}
if (fileExists(CONF.$dbConfigFile)) {
  $DBCONF = openJson(CONF.$dbConfigFile);
} else { // 존재하지 않을 경우 에러 메시지 출력
  // alert('DB 설정파일을 생성해 주세요', 'setup.php');
  pushLog('DB 설정파일을 생성해 주세요', 'error');
}
// DB 접속
if ($DBCONF) {
  connectDB($DBCONF);
}

/* 리퀘스트
page: top, about, tour, contact, etc...
action 액션: list, item...
code: 상품코드
do: 실행 
  item&do=view
          edit
          delete
*/
$PAGE = isset($_REQUEST['page'])?$_REQUEST['page']:'top';
$ACT = isset($_REQUEST['action'])?$_REQUEST['action']:'list';
$DO = isset($_REQUEST['do'])?$_REQUEST['do']:'view';
