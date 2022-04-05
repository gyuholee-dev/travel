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

// TODO: 메인페이지에서는 이벤트 이미지와 제목만 표시
// 상세 내용은 상품 페이지의 이벤트 액션에서 보여주는걸로
$fileList = glob(DATA.'item_*.json');
shuffle($fileList); // 랜덤으로 정렬
$data = openJson($fileList[0]);
$mainEvent_data = [
  'topimg' => FILE.$data['topimg'],
  'itemtitle' => $data['itemtitle'],
  'event' => explode("\n", $data['event'])[0], // 이벤트 첫줄만
  'link' => '?page=product&action=event&itemcode='.$data['itemcode'],
];

$mainEventBox = renderElement(TPL.'mainEventBox.html', $mainEvent_data);

// 테마리스트 --------------------------------------------------

$themeList = getProductList(9, '', '', true);
$themeBox_data = array();
foreach ($themeList as $key => $value) {
  $index = 'themeList'.$key;
  $themeBox_data[$index] = $value;
}
$themeBox = renderElement(TPL.'themeBox.html', $themeBox_data);

// 랜더링 --------------------------------------------------
$content_data = [
  'searchBox' => $searchBox,
  'mainEventBox' => $mainEventBox,
  'themeBox' => $themeBox,
];
$content .= renderElement(HTML.'top.html', $content_data);