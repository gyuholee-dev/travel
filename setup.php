<?php // 처음 설정
require_once 'setup/functions.php';

// 변수 선언
$content = ''; // 컨텐츠
$nav = ''; // 네비게이션 메뉴
$message = ''; // 메시지
$msg = array( // 로그
  'class' => '',
  'log' => '',
); 

// 액션
$action = 'DB'; // DB, TABLE, DATA
$action = isset($_GET['action'])?$_GET['action']:$action;

// DB 컨피그 기본값
$dbConfig = array();
if ($_SERVER['HTTP_HOST'] == 'localhost') { // 로컬호스트
  $configFile = 'db.localhost.json';
  $dbConfig = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'database' => 'travel',
  ];
} else { // cafe24
  $configFile = 'db.cafe24.json';
  $dbConfig = [
    'host' => 'localhost',
    'user' => 'userid',
    'pass' => 'userpassword',
    'database' => 'userid',
  ];
}
// 설정파일 로드
if (file_exists('configs/'.$configFile)) {
  $dbConfig = json_decode(file_get_contents('configs/'.$configFile),true);
} else { // 존재하지 않을 경우 에러 메시지 출력
  $msg['log'] = 'DB 설정파일을 생성해 주세요';
}

// 액션 리퀘스트 값에 따라 각각 다른 페이지를 인클루드한다.
switch ($action) {
  // 데이터베이스 설정
  case 'DB':
    include 'setup/_db.php';
    break;

  // 테이블 생성
  case 'TABLE':
    include 'setup/_table.php';
    break;

  // 데이터 입력
  case 'DATA':
    include 'setup/_data.php';
    break;
}

// 메시지
if ($msg['log'] != '') {
  $message = <<<HTML
    <div id="message" class="$msg[class]">$msg[log]</div>
  HTML;
}

// 네비게이션 메뉴
$active = ['DB'=>'','TABLE'=>'','DATA'=>''];
$active[$action] = 'active';
$disabled = checkDB($dbConfig, false) ? '' : 'disabled';
$nav = <<<HTML
  <nav class="menu">
    <ul>
      <li class="$active[DB]">
        <a href="setup.php?action=DB">MariaDB 설정</a>
      </li>
      <li class="$active[TABLE] $disabled">
        <a href="setup.php?action=TABLE">테이블 생성</a>
      </li>
      <li class="$active[DATA] $disabled">
        <a href="setup.php?action=DATA">데이터 입력</a>
      </li>
      <li class="$disabled">
        <a href="main.php">사이트 메인</a>
      </li>
    </ul>
  </nav>
HTML;

//------------------------ 랜더링 ------------------------

// 템플릿에 전달할 변수
$content_values = array( 
  '{message}' => $message,
  '{content}' => $content,
  '{nav}' => $nav,
);

// 템플릿 로드 및 랜더링
$html = file_get_contents('setup/template.html');
$html = strtr($html, $content_values);
echo $html;

