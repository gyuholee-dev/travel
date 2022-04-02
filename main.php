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
include "pages/$PAGE.php";

// 헤드
$head_values = [
  '{title}' => "$INFO[title] : $INFO[subtitle]",
  '{description}' => "$INFO[description]",
];
$head = strtr(file_get_contents('templates/head.html'), $head_values);

// 메시지
$message = printLog();

// 헤더
$header_values = [];
$header = strtr(file_get_contents('templates/header.html'), $header_values);

// 푸터
$footer_values = [];
$footer = strtr(file_get_contents('templates/footer.html'), $footer_values);


// 랜더링 --------------------------------------------------

$content_values = array(
  '{head}' => $head,
  '{message}' => $message,
  '{header}' => $header,
  '{nav}' => $nav,
  '{content}' => $content,
  '{aside}' => $aside,
  '{footer}' => $footer,
);

$html = file_get_contents('templates/template.html');
$html = strtr($html, $content_values);
echo $html;