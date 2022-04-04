<?php
// echo '32자 임의 코드'.'<br>';
// echo md5('dedawdwwddawdw').'<br>';
// echo md5('dwdwwdw').'<br>';
// echo md5(time()).'<br>';

// echo mb_strlen('자연,경치,나무,김치,경치');
// echo date("Y-m-d H:i:s", time());
// echo '<br>';

// print_r($_SERVER);

// echo basename(__FILE__);
// echo basename(__DIR__);
// basename(getcwd());

function makeCode($max=32, $upper=false) {
  $code = md5(time());
  if ($max <= 32) {
    $code = substr($code, 0, $max);
  }
  if ($upper) {
    $code = strtoupper($code);
  }
  return $code;
}

echo makeCode(8, true);