<?php // elements.php

// 엘리먼트 함수 ------------------------------------------------

// 템플릿을 로드하여 html 엘리먼트 생성
function renderElement($template, $data=array()) {
  $html = file_get_contents($template);
  foreach ($data as $key => $value) {
    $html = str_replace('{'.$key.'}', $value, $html);
  }
  return $html;
}

// 서치박스
function makeSearchBox() {
  
}