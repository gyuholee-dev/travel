<?php // DB 검사 및 생성

// 포스트 서브밋 처리
if (isset($_POST['confirm'])) {
  $dbConfig = [
    'host' => $_POST['host'],
    'user' => $_POST['user'],
    'pass' => $_POST['pass'],
    'database' => $_POST['database'],
  ];

  if ($_POST['confirm']=='DB생성') { // DB생성
    createDB($dbConfig);
    makeDBConfig($configFile, $dbConfig, false);
  } elseif ($_POST['confirm']=='테스트') { // 테스트
    checkDB($dbConfig);
  } elseif ($_POST['confirm']=='세이브') { // 설정파일 저장
    makeDBConfig($configFile, $dbConfig);
    // header('Location: setup.php');
  }
}

$content .= <<<HTML
  <section class="setup">
    <div class="title">MariaDB 설정</div>
    <form method="post" action="">
      <table>
        <tr>
          <td>호스트</td>
          <td><input type="text" name="host" value="$dbConfig[host]" readonly required></td>
        </tr>
        <tr>
          <td>사용자</td>
          <td><input type="text" name="user" value="$dbConfig[user]" required></td>
        </tr>
        <tr>
          <td>비밀번호</td>
          <td><input type="text" name="pass" value="$dbConfig[pass]"></td>
        </tr>
        <tr>
          <td>DB 이름</td>
          <td><input type="text" name="database" value="$dbConfig[database]" required></td>
        </tr>
      </table>
      <div class="buttons">
        <input class="btn" type="submit" name="confirm" value="DB생성">
        <input class="btn" type="submit" name="confirm" value="테스트">
        <input class="btn" type="submit" name="confirm" value="세이브">
      </div>
    </form>
  </section>
HTML;