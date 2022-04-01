<?php // 셋업 함수

// DB 로그인
function loginDB($dbConfig, $log=false) {
  global $DB;
  global $MSG;
  foreach ($dbConfig as $key => $value) {
    $$key = $value;
  }
  try {
    $DB = mysqli_connect('localhost', $user, $pass);
    if ($log) {
      $MSG['class'] = 'green';
      $MSG['log'] = '로그인 성공';
    }
    return true;
  } catch (Exception $e) {
    if ($log) {
      $MSG['class'] = 'red';
      $MSG['log'] = '로그인 실패: '.$e->getMessage();
    }
    return false;
  }
}

// DB 셀렉트
function selectDB($dbConfig, $log=false) {
  global $DB;
  global $MSG;
  foreach ($dbConfig as $key => $value) {
    $$key = $value;
  }
  try {
    $DB = mysqli_select_db($DB, $database);
    if ($log) {
      $MSG['class'] = 'green';
      $MSG['log'] = 'DB 선택 성공';
    }
    return true;
  } catch (Exception $e) {
    if ($log) {
      $MSG['class'] = 'red';
      $MSG['log'] = 'DB 선택 실패: '.$e->getMessage();
    }
    return false;
  }
}


// DB 접속 검사
function checkDB($dbConfig, $log=false) {
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

// DB 접속
function connectDB($dbConfig, $log=false) {
  return checkDB($dbConfig, $log);
}

// DB 생성
function createDB($dbConfig, $log=true) {
  global $MSG;
  foreach ($dbConfig as $key => $value) {
    $$key = $value;
  }
  try {
    $db = mysqli_connect($host, $user, $pass);
    $sql = "CREATE DATABASE $database";
    mysqli_query($db, $sql);
    if ($log) {
      $MSG['class'] = 'green';
      $MSG['log'] = 'DB 생성 성공';
    }
    return true;
  } catch (Exception $e) {
    if ($log) {
      $MSG['class'] = 'red';
      $MSG['log'] = 'DB 생성 실패: '.$e->getMessage();
    }
    return false;
  }
}

// DB 설정파일 생성
function makeDBConfig($dbConfig, $log=false) {
  global $MSG;
  $file = fopen('configs/'.$dbConfig['file'], 'w');
  $dbConfig = json_encode($dbConfig);
  $write = fwrite($file, $dbConfig);
  if ($log) {
    if ($write !== false) {
        $MSG['class'] = 'green';
        $MSG['log'] = '설정파일 저장됨';
    } else {
      $MSG['class'] = 'red';
      $MSG['log'] = '설정파일 저장 실패';
    }
  }
  fclose($file);
}

function createTable($tables, $drop=false) {
  global $DB;
  global $MSG;

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
  global $MSG;

  foreach ($tables as $key => $table) {
    $sql = "SHOW TABLES LIKE '$table'";
    $result = mysqli_query($DB, $sql);
    if (mysqli_num_rows($result) == 0) {
      $MSG['class'] = 'red';
      $MSG['log'] = '테이블 없음';
      return false;
    }
  }
  return true;
}
