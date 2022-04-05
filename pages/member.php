<?php // member.php
/* 액션 일람
action=login: 로그인
       logout: 로그아웃
       resigter: 회원가입
       modify: 회원정보 수정
       delete: 회원탈퇴
*/
// 로그인 체크
if ($USER) {

}
// 리퀘스트
$ACT = $_REQUEST['action'] ?? 'login';
$DO = $_REQUEST['do'] ?? '';
// TODO: 로그인 여부 및 DB 유무에 따라 액션 강제


// 내용 변수
$pageTitle = '';
$memberBox = '';

// 액션에 따라 내용 생성
if ($ACT == 'login') {
  include PAGE.'_login.php';

} elseif ($ACT == 'logout') {
  logout();

} elseif ($ACT == 'resigter' || $ACT == 'modify') {
  include PAGE.'_resigter.php';
  
} elseif ($ACT == 'error') {
  $pageTitle = '오류';
  include PAGE.'_error.php';
}


$INFO['subtitle'] = $pageTitle;


// 랜더링 --------------------------------------------------
$content_data = [
  'action' => $ACT,
  'memberBox' => $memberBox,
];
$content .= renderElement(HTML.'member.html', $content_data);