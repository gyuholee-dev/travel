<?php // functions.php

// DB 접속 검사
function connectDB($dbConfig, $log=true) {
  global $DB;
  global $MSG;
  foreach ($dbConfig as $key => $value) {
    $$key = $value;
  }
  try {
    $DB = mysqli_connect($host, $user, $pass, $database);
    if ($log) {
      $MSG['class'] = 'green';
      $MSG['log'] = 'DB 접속 성공';
    }
    return true;
  } catch (Exception $e) {
    if ($log) {
      $MSG['class'] = 'red';
      $MSG['log'] = 'DB 접속 실패: '.$e->getMessage();
    }
    return false;
  }
}