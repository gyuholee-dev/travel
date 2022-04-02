<?php // main.php
// 초기화
require_once 'includes/init.php';

// 컨텐츠
$head = '';
$message = '';
$header = '';
$nav = '';
$content = '';
$aside = '';
$footer = '';

// 페이지
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
$header_data = [];
$header = renderElement(TPL.'header.html', $header_data);

// 푸터
$footer_data = [];
$footer = renderElement(TPL.'footer.html', $footer_data);


// 랜더링 --------------------------------------------------

$content_data = array(
  'head' => $head,
  'message' => $message,
  'header' => $header,
  'nav' => $nav,
  'content' => $content,
  'aside' => $aside,
  'footer' => $footer,
);

$html = renderElement(TPL.'template.html', $content_data);
echo $html;