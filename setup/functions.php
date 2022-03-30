<?php // 셋업 함수

// DB 접속 검사
function checkDB($dbConfig, $log=true) {
  global $msg;
  foreach ($dbConfig as $key => $value) {
    $$key = $value;
  }
  try {
    mysqli_connect($host, $user, $pass, $database);
    if ($log) {
      $msg['class'] = 'green';
      $msg['log'] = 'DB 접속 성공';
    }
    return true;
  } catch (Exception $e) {
    if ($log) {
      $msg['class'] = 'red';
      $msg['log'] = 'DB 접속 실패: '.$e->getMessage();
    }
    return false;
  }
}

// DB 생성
function createDB($dbConfig, $log=true) {
  global $msg;
  foreach ($dbConfig as $key => $value) {
    $$key = $value;
  }
  try {
    $db = mysqli_connect($host, $user, $pass);
    $sql = "CREATE DATABASE $database";
    mysqli_query($db, $sql);
    if ($log) {
      $msg['class'] = 'green';
      $msg['log'] = 'DB 생성 성공';
    }
    return true;
  } catch (Exception $e) {
    if ($log) {
      $msg['class'] = 'red';
      $msg['log'] = 'DB 생성 실패: '.$e->getMessage();
    }
    return false;
  }
}

// DB 설정파일 생성
function makeDBConfig($configFile, $dbConfig, $log=true) {
  global $msg;
  $file = fopen('configs/'.$configFile, 'w');
  $dbConfig = json_encode($dbConfig);
  fwrite($file, $dbConfig);
  fclose($file);
  if ($log) {
    $msg['class'] = 'green';
    $msg['log'] = '설정파일 저장됨';
  }
}
