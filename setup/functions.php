<?php // 셋업 함수

// 로그인
function loginDB($dbConfig, $log=false) {
  global $DB;
  global $MSG;
  foreach ($dbConfig as $key => $value) {
    $$key = $value;
  }
  try {
    $DB = mysqli_connect('localhost', $user, $pass);
    if ($log) {
      $msg['class'] = 'green';
      $msg['log'] = '로그인 성공';
    }
    return true;
  } catch (Exception $e) {
    if ($log) {
      $msg['class'] = 'red';
      $msg['log'] = '로그인 실패: '.$e->getMessage();
    }
    return false;
  }
}


// DB 접속 검사
function selectDB($dbConfig, $log=true) {
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
function makeDBConfig($dbConfig, $log=false) {
  global $msg;
  $file = fopen('configs/'.$dbConfig['file'], 'w');
  $dbConfig = json_encode($dbConfig);
  fwrite($file, $dbConfig);
  fclose($file);
  if ($log) {
    $msg['class'] = 'green';
    $msg['log'] = '설정파일 저장됨';
  }
}

function createTable($tables, $drop=false) {
  global $DB;
  global $msg;

  foreach ($tables as $key => $table) {
    if ($drop) {
      $sql = "DROP TABLE IF EXISTS $table";
      mysqli_query($DB, $sql);
    }
    /* $sql = "CREATE TABLE $table (
      id INT(11) NOT NULL AUTO_INCREMENT,
      name VARCHAR(255) NOT NULL,
      email VARCHAR(255) NOT NULL,
      password VARCHAR(255) NOT NULL,
      PRIMARY KEY (id)
    )"; */
    // mysqli_query($DB, $sql);
  }
}

function checkTable($tables) {
  global $DB;
  global $msg;

  foreach ($tables as $key => $table) {
    $sql = "SHOW TABLES LIKE '$table'";
    $result = mysqli_query($DB, $sql);
    if (mysqli_num_rows($result) == 0) {
      $msg['class'] = 'red';
      $msg['log'] = '테이블 없음';
      return false;
    }
  }
  return true;
}
