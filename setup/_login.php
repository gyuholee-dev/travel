<?php // 로그인

// 로그인 처리
if (isset($_POST['confirm'])) {
  $DBCONF['user'] = $_POST['user'];
  $DBCONF['pass'] = $_POST['pass'];

  if (loginDB($DBCONF) == true) { // 로그인 성공
    $_SESSION['key'] = time().md5($DBCONF['user']);
    setcookie('key', $_SESSION['key'], time()+3600);
    makeDBConfig($DBCONF);

    // $MSG['log'] = '로그인 성공';
    // $MSG['class'] = 'green';
    header('Location: setup.php?action=db');
  
  } else { // 로그인 실패
    $MSG['log'] = '로그인 실패';
    $MSG['class'] = 'red';
  }
}

$content .= <<<HTML
  <section class="setup login">
    <div class="title">MariaDB 로그인</div>
    <form method="post" action="">
      <table>
        <tr>
          <td>사용자</td>
          <td><input type="text" name="user" value="$DBCONF[user]" required></td>
        </tr>
        <tr>
          <td>비밀번호</td>
          <td><input type="password" name="pass" value="$DBCONF[pass]"></td>
        </tr>
      </table>
      <div class="buttons">
        <input class="btn" type="submit" name="confirm" value="로그인">
        <input class="btn" type="submit" value="취소">
      </div>
    </form>
  </section>
HTML;