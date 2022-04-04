<?php

// 서치박스 --------------------------------------------------

$searchBox_data = [
  'activeKorea' => '',
  'activeWorld' => '',
  'category' => '전체',
  'search' => '',
  'placeList' => ''
];
$searchBox = renderElement(TPL.'searchBox.html', $searchBox_data);

// 메인이벤트 --------------------------------------------------

$fileList = glob(DATA.'item_*.json');
shuffle($fileList); // 랜덤으로 정렬

// 랜더링 --------------------------------------------------
$content_data = [
  'searchBox' => $searchBox,
];
$content .= renderElement(HTML.'top.html', $content_data);