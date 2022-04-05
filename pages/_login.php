<?php
$pageTitle = '로그인';

if (isset($_POST['confirm'])) {
  $userid = $_POST['userid'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM travel_member WHERE userid='$userid'";
  $result = mysqli_query($DB, $sql);

  try {
    $result = mysqli_query($DB, $sql);
    $userData = mysqli_fetch_assoc($result);

    if ($userData['password'] == AES_ENCRYPT($password, $password)) {
      setUserData($userData);
      // pushLog('로그인 성공', 'success');
      // $_SESSION['MSG'] = $MSG;
      header('Location: main.php');
    } else {
      pushLog('로그인 실패: 비밀번호를 확인해 주세요', 'error');
      $_SESSION['MSG'] = $MSG;
      header('Location: ?page=member&action=login');
    }
  } catch (Exception $e) {
    pushLog('로그인 오류: '.$e->getMessage(), 'error');
    $_SESSION['MSG'] = $MSG;
    header('Location: ?page=member&action=login');
  }
}


$memberBox = <<<HTML
  <div id="inputbox" class="$ACT">
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
          onclick="location.href='?page=member&action=resigter'">
      </div>
    </form>
  </div>
HTML;