<?php // main.php
// 초기화
require_once 'includes/init.php';

// 데이터 선언
$head = '';
$message = '';
$header = '';
$nav = '';
$content = '';
$aside = '';
$footer = '';

// 컨텐츠 -> 페이지에서 처리
include PAGE."$PAGE.php";

// 헤드
$head_data = [
  'title' => "$INFO[title] : $INFO[subtitle]",
  'description' => "$INFO[description]",
];
$head = renderElement(TPL.'head.html', $head_data);

// 메시지
$message = printLog();

// 헤더
$userLink = ['login', '로그인'];
if ($USER) {
  $userLink = ['logout', '로그아웃'];
}
$header_data = [
  'userLink0' => $userLink[0],
  'userLink1' => $userLink[1],
];
$header = renderElement(TPL.'header.html', $header_data);

// 푸터
$footer_data = [];
$footer = renderElement(TPL.'footer.html', $footer_data);


// 랜더링 --------------------------------------------------

$html_data = array(
  'head' => $head,
  'message' => $message,
  'header' => $header,
  'nav' => $nav,
  'content' => $content,
  'aside' => $aside,
  'footer' => $footer,
);

$html = renderElement(TPL.'template.html', $html_data);
echo $html;