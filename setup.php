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

// 리퀘스트 액션
$action = 'DB'; // DB, TABLE, DATA
$action = isset($_GET['action'])?$_GET['action']:$action;

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
$nav = <<<HTML
  <nav class="menu">
    <ul>
      <li class="$active[DB]"><a href="setup.php?action=DB">MariaDB 설정</a></li>
      <li class="$active[TABLE]"><a href="setup.php?action=TABLE">테이블 생성</a></li>
      <li class="$active[DATA]"><a href="setup.php?action=DATA">데이터 입력</a></li>
      <li><a href="main.php">사이트 메인</a></li>
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

