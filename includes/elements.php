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

// 카테고리와 검색어에 따라 플레이스 데이터를 리스트로 반환
function getPlaceList($category, $search='') {
  // 검색어가 없으면 리턴
  if ($search == '') {
    return false;
  }
  // 데이터 파일 로드
  // TODO: DB 존재시 DB에서 가져오는 코드를 추가
  if ($category == '국내') {
    $placeData = openJson(DATA.'place_korea.json');
  } elseif ($category == '해외') {
    $placeData = openJson(DATA.'place_world.json');
  } elseif ($category == '전체') {
    $placeData = openJson(DATA.'place_korea.json') + openJson(DATA.'place_world.json');
  }

  // 검색어에 따라 데이터 추출
  $placeList = '';
  foreach ($placeData as $key => $place) {
    if ($search != '전체') { // 검색어가 '전체' 일 경우 전부 표시
      // 일단 배열을 문자열로 합친다
      $place = implode('^', $place);
      // 검색어를 찾으면 강조하고 다시 배열화
      if (strpos($key, $search) !== false || strpos($place, $search) !== false) {
        $key = str_replace($search, "<span class='emp'>$search</span>", $key);
        $place = str_replace($search, "<span class='emp'>$search</span>", $place);
        $place = explode('^', $place);
      } else {
        continue;
      }
    }
    $placeList .= "<ul><li>$key</li>";
    foreach ($place as $name) {
      $placeList .= "<li>$name</li>";
    }
    $placeList .= "</ul>";
  }

  if ($search != '' && $placeList == '') {
    $placeList = "<div class='nothing'>검색 결과가 없습니다.</div>";
  }

  $placeList = "<div class='location'>$placeList</div>";

  return $placeList;
}

// 카테고리와 검색어에 따라 상품 데이터를 리스트로 반환
function getProductList($max=0, $category, $search='') {

  $fileList = glob(DATA.'item_*.json');
  rsort($fileList); // 최신순으로 정렬
  if ($max > 0) { // 최대 개수만큼만 리턴
    $fileList = array_slice($fileList, 0, $max);
  }

  // 데이터 파일 로드
  // TODO: DB 존재시 DB에서 가져오는 코드를 추가
  $productData = array();
  foreach ($fileList as $file) {
    $data = openJson($file);
    $productData[$data['itemcode']] = $data;
  }
  // print_r($productData);

  $productList = '';
  foreach ($productData as $key => $product) {
    $url = "?page=product&itemcode=$key";
    $topImg = FILE.$product['topimg'];
    $itemTitle = $product['itemtitle'];
    $price = number_format($product['price']).'원 부터~';
    $hashTag = explode(',', $product['hashtag']);

    $productList .= <<<HTML
      <div class="t-images1">
        <a href="$url">
          <div class="t-img">
            <img src="$topImg"></div>
          <p>$itemTitle</p>
          <p>$price</p>
          <p class="hash">#$hashTag[0]</p>
          <p class="hash">#$hashTag[1]</p>
          <p class="hash">#$hashTag[2]</p>
        </a>
      </div>
    HTML;
  }
  
  return $productList;
}
