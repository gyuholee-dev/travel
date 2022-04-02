<?php // 셋업 함수

// 기초 함수 ------------------------------------------------

// 파일 존재 검사
function fileExists($file) {
  return file_exists($file);
}

// json 파일 오픈
function openJson($file) {
  $json = file_get_contents($file);
  $json = json_decode($json, true);
  return $json;
}

// json 파일 세이브
function saveJson($file, $json) {
  $json = json_encode($json, JSON_PRETTY_PRINT);
  return file_put_contents($file, $json);
}


// DB 함수 ------------------------------------------------

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
    $DB = mysqli_connect($host, $user, $pass);
    $sql = "CREATE DATABASE $database";
    mysqli_query($DB, $sql);
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
  $file = 'configs/'.$dbConfig['file'];
  $write = saveJson($file, $dbConfig);
  if ($write !== false) {
    if ($log) {
      $MSG['class'] = 'green';
      $MSG['log'] = '설정파일 저장됨';
    }
    return true;
  } else {
    if ($log) {
        $MSG['class'] = 'red';
        $MSG['log'] = '설정파일 저장 실패';
    }
    return false;
  }
}

// 테이블 생성
function createTable($table, $drop=false, $log=false) {
  global $DB;
  global $MSG;

  if ($drop) {
    $sql = "DROP TABLE IF EXISTS $table";
    mysqli_query($DB, $sql);
  }

  // echo $table.'<br>';
  $sql = file_get_contents('data/'.$table.'.sql');
  // echo $sql.'<br><br>';

  try {
    mysqli_query($DB, $sql);
    if ($log) {
      if ($MSG['class'] != 'red') {
        $MSG['class'] = 'green';
      }
      $MSG['log'] .= "$table(성공) ";
    }
    return true;
  } catch (Exception $e) {
    if ($log) {
      $MSG['class'] = 'red';
      $MSG['log'] .= "$table(실패) ";
    }
    return false;
  }
}

// 테이블 검사
function checkTable($table, $log=false) {
  global $DB;
  global $MSG;

  mysqli_report(MYSQLI_REPORT_STRICT);

  $sql = "SHOW TABLES LIKE '$table'";
  $result = mysqli_query($DB, $sql);
  if (mysqli_num_rows($result) == 0) {
    if ($log) {
      if ($MSG['class'] != 'red') {
        $MSG['class'] = 'green';
      }
      $MSG['log'] .= "$table(없음) ";
    }
    return false;
  }
  if ($log) {
    $MSG['class'] = 'red';
    $MSG['log'] .= "$table(있음) ";
  }
  return true;
}

// 코드 생성
// 현재 시간을 소스로 최대 32자 임의 문자열 생성
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