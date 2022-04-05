<?php
$pageTitle = '회원가입';

if (isset($_POST['confirm'])) {
  $userid = $_POST['userid'];
  $password = $_POST['password'];
  $nickname = $_POST['nickname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $avatar = $_POST['avatar'];

  $sql = "INSERT INTO travel_member (userid, password, nickname, email, phone, address, avatar)
          VALUES('$userid', AES_ENCRYPT('$password', '$password'), '$nickname', '$email', '$phone', '$address', '$avatar')";
  try {
    mysqli_query($DB, $sql);
    $userData = array(
      'userid' => $userid,
      'nickname' => $nickname,
      'groups' => 'user'
    );
    setUserData($userData);
    pushLog('회원가입 성공', 'success');
  } catch (Exception $e) {
    pushLog('회원가입 실패: '.$e->getMessage(), 'error');
  }
  $_SESSION['MSG'] = $MSG;
  header('Location: main.php');
}

$memberBox = <<<HTML
  <div id="inputbox" class="$ACT">
    <div class="title">$pageTitle</div>
    <form name="$ACT" method="post" action="" autocomplete="off">
      <table>
        <tr>
          <td>아이디</td>
          <td>
            <input type="text" name="userid" value="" required onchange="resetCheck()">
            <input class="btn small" type="button" value="확인" onclick="checkId()">
            <!-- quest: &#63; check: &#10003; cross: &#10007; -->
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
          <td>프로필 사진</td>
          <td><input type="file" name="avatar" value=""></td>
        </tr>
      </table>

      <div class="buttons">
        <input type="hidden" name="idcheked" value="false">
        <input type="hidden" name="action" value="$ACT">
        <label><input type="checkbox" name="agree" value="off">약관동의</label>
        <input class="hidden" type="submit" name="confirm" value="true">
        <input class="btn" type="button" value="회원가입" onclick="sendRegister()">
      </div>
    </form>
  </div>
HTML;