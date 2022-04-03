<?php

// 리퀘스트
$search = $_REQUEST['search'] ?? '';
$category = $_REQUEST['category'] ?? '전체'; // 국내, 해외, 전체

// 액티브
$active = ['국내'=>'', '해외'=>'', '전체'=>''];
$active[$category] = 'active';

// 플레이스리스트
$placeList = getPlaceList($category, $search);

$searchBox_data = [
  'activeKorea' => $active['국내'],
  'activeWorld' => $active['해외'],
  'category' => $category,
  'search' => $search,
  'placeList' => $placeList
];
$searchBox = renderElement(TPL.'searchBox.html', $searchBox_data);

// 랜더링 --------------------------------------------------
$content_data = [
  'searchBox' => $searchBox,
];
$content .= renderElement(HTML.'top.html', $content_data);