<?php // DB 검사 및 생성

// DB 컨피그 기본값
$dbConfig = array();
if ($_SERVER['HTTP_HOST'] == 'localhost') { // 로컬호스트
  $configFile = 'db.localhost.json';
  $dbConfig = [
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'database' => 'travel',
  ];
} else { // cafe24
  $configFile = 'db.cafe24.json';
  $dbConfig = [
    'host' => 'localhost',
    'user' => 'userid',
    'pass' => 'userpassword',
    'database' => 'userid',
  ];
}
// 설정파일 검사
if (file_exists('configs/'.$configFile)) { // 존재하면 로드하고 접속검사
  $dbConfig = json_decode(file_get_contents('configs/'.$configFile),true);
  checkDB($dbConfig);
} else { // 존재하지 않을 경우 에러 메시지 출력
  $msg['log'] = 'DB 설정파일을 생성해 주세요';
}

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
  } elseif ($_POST['confirm']=='테스트') { // 테스트
    checkDB($dbConfig);
  } elseif ($_POST['confirm']=='세이브') { // 설정파일 생성
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