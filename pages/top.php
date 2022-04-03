<?php

$searchBox_data = [
  'activeKorea' => '',
  'activeWorld' => '',
  'category' => '전체',
  'search' => '',
  'placeList' => ''
];
$searchBox = renderElement(TPL.'searchBox.html', $searchBox_data);

// 랜더링 --------------------------------------------------
$content_data = [
  'searchBox' => $searchBox,
];
$content .= renderElement(HTML.'top.html', $content_data);