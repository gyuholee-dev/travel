<?php // member.php
// 리퀘스트
$ACT = $_REQUEST['action'] ?? 'login';
$DO = $_REQUEST['do'] ?? '';

// 로그인 체크
/* if (!$USER && $ACT != 'login') {
  $ACT = 'login';
  header('Location: ?page=member&action='.$ACT);
} */

// 액션에 따라
/* switch ($ACT) {
  case 'login':
    $pageTitle = '로그인';
    
    break;

  case 'logout':
    $pageTitle = '로그아웃';
    break;
  
  case 'join':
    $pageTitle = '회원가입';
    break;

  case 'modify':
    $pageTitle = '회원정보수정';
    break;

  case 'delete':
    $pageTitle = '회원탈퇴';
    break;

  case 'mypage':
    $pageTitle = '예약조회';
    break;
} */

$pageTitle = '';
$memberBox = '';

// 액션에 따라 내용 생성
if ($ACT == 'login') {
  $pageTitle = '로그인';
  $memberBox = <<<HTML
    <div id="memberbox" class="$ACT">
      <div class="title">$pageTitle</div>
      <form method="post" action="">
        <table>
          <tr>
            <td>사용자</td>
            <td><input type="text" name="userid" value="" required></td>
          </tr>
          <tr>
            <td>비밀번호</td>
            <td><input type="password" name="password" value="" required></td>
          </tr>
        </table>
        <div class="buttons">
          <input class="btn" type="submit" name="confirm" value="로그인">
          <input class="btn" type="button" value="회원가입" 
            onclick="location.href='?page=member&action=join'">
        </div>
      </form>
    </div>
  HTML;

} elseif ($ACT == 'join' || $ACT == 'modify') {
  $pageTitle = '회원가입';
  $memberBox = <<<HTML
    <div id="memberbox" class="$ACT">
      <div class="title">$pageTitle</div>
      <form method="post" action="" autocomplete="off">
        <table>

          <tr>
            <td>아이디</td>
            <td>
              <input type="text" name="userid" value="" required>
              <input class="btn small" type="button" value="확인">
            </td>
          </tr>
          <tr>
            <td>비밀번호</td>
            <td><input type="password" name="password" value="" required></td>
          </tr>
          <tr>
            <td>비밀번호 확인</td>
            <td><input type="password" name="password_check" value="" required></td>
          </tr>

          <tr>
            <td class="label" colspan="2"><span>필수정보</span></td>
          </tr>

          <tr>
            <td>이름</td>
            <td><input type="text" name="nickname" value="" required></td>
          </tr>
          <tr>
            <td>이메일</td>
            <td><input type="email" name="email" value="" required></td>
          </tr>

          <tr>
            <td class="label" colspan="2"><span>선택정보</span></td>
          </tr>

          <tr>
            <td>전화번호</td>
            <td><input type="text" name="phone" value=""></td>
          </tr>
          <tr>
            <td>주소</td>
            <td><input type="text" name="address" value=""></td>
          </tr>
          <tr>
            <td>아바타</td>
            <td><input type="file" name="avatar" value=""></td>
          </tr>
        
        </table>
        <div class="buttons">
          <label><input type="checkbox" name="agree">약관동의</label>
          <input class="btn" type="submit" name="confirm" value="회원가입">
        </div>
      </form>
    </div>
  HTML;

}


$INFO['subtitle'] = $pageTitle;


// 랜더링 --------------------------------------------------
$content_data = [
  'action' => $ACT,
  'memberBox' => $memberBox,
];
$content .= renderElement(HTML.'member.html', $content_data);