<?php

// 리퀘스트
$search = $_REQUEST['search'] ?? '';
$category = $_REQUEST['category'] ?? '전체'; // 국내, 해외, 전체
if ($category != '전체' && $category != '국내' && $category != '해외') {
  $category = '전체';
}

// 서치박스 --------------------------------------------------

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

// 상품리스트 --------------------------------------------------

// 프로덕트리스트
$productList = getProductList($category, $search);

$productBox_data = [
  'title' => $category=='전체'?'전체 상품':$category.'투어 모든상품',
  'productList' => $productList
];
$productBox = renderElement(TPL.'productBox.html', $productBox_data);

// 랜더링 --------------------------------------------------
$content_data = [
  'searchBox' => $searchBox,
  'productBox' => $productBox,
];
$content .= renderElement(HTML.'place.html', $content_data);