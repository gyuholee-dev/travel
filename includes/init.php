<?php // init.php
// 초기화 ------------------------------------------------
require_once 'includes/functions.php';
require_once 'includes/elements.php';
ini_set('display_errors', 'On');
mysqli_report(MYSQLI_REPORT_ALL);
session_start();

// 패스 상수 선언
// define('ROOT', '/'.basename(getcwd()).'/');
define('INC', 'includes/');
define('CONF', 'configs/');
define('DATA', 'data/');
define('FILE', 'files/');
define('PAGE', 'pages/');
define('IMG', 'images/');
define('STL', 'styles/');
define('SCT', 'scripts/');
define('TPL', 'pages/templates/');
define('HTML', 'pages/html/');

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

/* 리퀘스트
page: top, about, tour, contact, etc...
action 액션: list, item...
do: 실행 
  item&do=view
          edit
          delete
*/
$PAGE = isset($_REQUEST['page'])?$_REQUEST['page']:'top';
$ACT = isset($_REQUEST['action'])?$_REQUEST['action']:'list';
$DO = isset($_REQUEST['do'])?$_REQUEST['do']:'view';

// 메시지
$MSG = [
  'info' => '',
  'success' => '',
  'error' => ''
];

// DB 초기화 ------------------------------------------------

// 설정파일 로드
$INFO = openJson(CONF.'info.json');
$CONF = openJson(CONF.'config.json');

// DB 설정파일 로드
if ($_SERVER['HTTP_HOST']=='localhost') {
  $dbConfigFile = 'db.localhost.json';
} else {
  $dbConfigFile = 'db.cafe24.json';
}

// DB설정 체크, 접속, 테이블 검사 
$dbLog = '';
$DBCONF = openJson(CONF.$dbConfigFile);
if (!$DBCONF) {
  $dbLog = 'DB 설정파일이 존재하지 않습니다.';
} else {
  $DB = connectDB($DBCONF);
  if (!$DB) {
    $dbLog = 'DB 접속에 실패하였습니다.';
  } else {
    $fileList = glob(DATA.'travel_*.sql');
    foreach ($fileList as $file) {
      $table = str_replace('.sql', '', basename($file));
      if (!checkTable($table)) {
        $dbLog = '테이블이 존재하지 않습니다.';
        $DB = disconnectDB($DB);
        break;
      }
    }
  }
}
if ($dbLog) {
  pushLog($dbLog.' 셋업을 실행해 주세요. [<a href="setup.php">바로가기</a>]', 'error');
}
unset($dbConfigFile, $dbLog);

// 유저 초기화 ------------------------------------------------

// 로그인 체크
if (isset($_SESSION['key'])) {
  if (isset($_COOKIE['key']) && $_SESSION['key'] == $_COOKIE['key']) {
    $USER = $_SESSION['key'];
  } else {
    session_destroy();
    setcookie('key', '', time()-60);
  }
}