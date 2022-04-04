<?php // product.php

// 리퀘스트
$itemCode = $_REQUEST['itemcode'] ?? '';

// 데이터 로드
$data = getProductData($itemCode);
$INFO['subtitle'] = $data['itemtitle'];

$locations = explode(',', $data['location']);
$locatons = "
  <p>$data[category]</p>
  <p>></p><p>$locations[0]</p>
  <p>></p><p>$locations[1]</p>
";
$hashtags = explode(',', $data['hashtag']);
$hashtags = "
  <p class='hash'>#$hashtags[0]</p>
  <p class='hash'>#$hashtags[1]</p>
  <p class='hash'>#$hashtags[2]</p>
";

$flight = '대한항공 KE'.numStr(rand(1, 9999), 4);

// 데이터 가공
$content_data = [
  'itemtitle' => $data['itemtitle'],
  'locatons' => $locatons,
  'topimg' => FILE.$data['topimg'],
  'hashtags' => $hashtags,
  'image1' => FILE.$data['image1'],
  'image2' => FILE.$data['image2'],
  'image3' => FILE.$data['image3'],
  'image4' => FILE.$data['image4'],
  'image5' => FILE.$data['image5'],
  'itemcode' => $data['itemcode'],
  'schedule' => $data['schedule'],
  'price' => $data['price'],
  'summary' => '<pre>'.$data['summary'].'</pre>',
  'description' => '<pre>'.$data['description'].'</pre>',
  'flight' => $flight,
  'destination' => $locations[0],
];

// 랜더링 --------------------------------------------------

$content .= renderElement(HTML.'product.html', $content_data);