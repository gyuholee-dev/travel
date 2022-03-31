<?php // main.php

// 초기화
require_once 'includes/init.php';
// 함수
require_once 'includes/functions.php';

// 컨텐츠
$head = '';
$header = '';
$nav = '';
$content = '';
$aside = '';
$footer = '';

// 헤드
$head = <<<HTML
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico">
  <title>$INFO[title] : $INFO[subtitle]</title>
  <meta name="description" content="$INFO[description]">
  <link rel="stylesheet" href="styles/style.css">
  <script type="text/javascript" src="scripts/script.js"></script>
HTML;

$header = <<<HTML
  <div id="top">
    <div class="logo">
      <a href="index.php"><img src="images/logo/logo2.png"></a>
    </div>
    <div class="dropwhere">
      <div class="dropdown-btn"><p>어디로 가세요?▽</p></div>
      <div class="dropwhere-cont">
        <p><a href="#">국내여행지</a></p>
        <p><a href="#">해외여행지</a></p>
        <p><a href="#">추천투어</a></p>
        <p><a href="#">블로그</a></p>
        <p><a href="#">커뮤니티</a></p>
      </div>
    </div>
    <div class="right">
      <P><a href="#">회사소개</a></P>
      <P><a href="#">공지사항</a></P>
      <P><a href="#">내여행</a></P>
      <P><a href="#">로그인</a></P>
    </div>
  </div>
HTML;

// 푸터
$footer = <<<HTML
  <div class="bottom-logo">
    <a href="index.php"><img src="images/logo/logo4.png"></a>
  </div>
  <div class="policy">
    <p></p>
  </div>
  <div class="c-info">
    <P></P>
  </div>
  <div class="social">
    <a href=""></a>
  </div>
HTML;

// 콘텐츠
include "pages/$PAGE.php";

// 랜더링 --------------------------------------------------

$content_values = array( 
  '{head}' => $head,
  '{header}' => $header,
  '{nav}' => $nav,
  '{content}' => $content,
  '{aside}' => $aside,
  '{footer}' => $footer,
);

$html = file_get_contents('templates/template.html');
$html = strtr($html, $content_values);
echo $html;