<?php // functions.php

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
  $json = json_encode($json, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
  return file_put_contents($file, $json);
}

// 로그 입력
function pushLog($log, $class='info') {
  global $MSG;
  $MSG[$class] .= ($MSG[$class] != '')?' | ':'';
  $MSG[$class] .= $log;
  return true;
}

// 로그 출력
function printLog() {
  global $MSG;
  $html = '';
  foreach ($MSG as $type => $log) {
    $html .= $log?"<div class='log $type'>$log</div>":'';
  }
  return $html;
}

// DB 함수 ------------------------------------------------

// DB 로그인
// 주의: mysqli_report(MYSQLI_REPORT_ALL) 설정 필요
function loginDB($dbConfig, $log=false) {
  global $DB;
  global $MSG;
  foreach ($dbConfig as $key => $value) {
    $$key = $value;
  }
  try {
    $DB = mysqli_connect('localhost', $user, $pass);
    if ($log) {
      pushLog('로그인 성공', 'success');
    }
    return true;
  } catch (Exception $e) {
    if ($log) {
      pushLog('로그인 실패: '.$e->getMessage(), 'error');
    }
    return false;
  }
}

// DB 접속
function connectDB($dbConfig, $log=true) {
  global $DB;
  global $MSG;
  foreach ($dbConfig as $key => $value) {
    $$key = $value;
  }
  try {
    $DB = mysqli_connect($host, $user, $pass, $database);
    if ($log) {
      pushLog('DB 접속 성공', 'success');
    }
    return true;
  } catch (Exception $e) {
    if ($log) {
      pushLog('DB 접속 실패: '.$e->getMessage(), 'error');
    }
    return false;
  }
}