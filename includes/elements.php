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
      // 일단 배열을 합친다
      $place = implode('^', $place);
      // 검색어를 찾으면 강조하고 다시 합침
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
