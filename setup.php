<?php // 처음 설정

// 액션
$action = 'DB'; // DB, TABLE, ADMIN
$action = isset($_GET['action'])?$_GET['action']:$action;

// 메시지
$msg = array('', '');

// DB 기본값
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'travel'; 

// 설정파일 존재 검사
if (file_exists('configs/db.php')) {
  // 설정파일 로드
  $dbConfig = file_get_contents('configs/db.php');;
  $host = $dbConfig['host'];
  $user = $dbConfig['user'];
  $pass = $dbConfig['pass'];
  $database = $dbConfig['database']; 
}

if (isset($_POST['confirm'])) {
  if ($_POST['action']=='DB') {
    if ($_POST['confirm']=='TEST') {
      // DB 접속 시도
      try {
        $DB = mysqli_connect($host, $user, $pass, $database);
        $msg[0] = 'green';
        $msg[1] = 'DB 접속 성공';
      } catch (Exception $e) {
        $msg[0] = 'red';
        $msg[1] = 'DB 접속 실패';
      }
    } elseif ($_POST['confirm']=='SAVE') {
      // 설정파일 생성
      $data = "
        [
          'host' => '$_POST[host]',
          'user' => '$_POST[user]',
          'pass' => '$_POST[pass]',
          'database' => '$_POST[database]'
        ];
      ";
      echo $data;
      $file = fopen('configs/db.php', 'w');
      fwrite($file, $data);
      fclose($file);
    }
  }


}


?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/setup.css">
  <title>SETUP</title>
</head>
<body>
  <?php
    if ($msg[1] != '') {
      echo "<div id='log' class='$msg[0]'>$msg[1]</div>";
    }
  ?>
  <div id="container" class="setup">

<?php
  switch ($action) {
    // 데이터베이스 설정
    case 'DB':
      echo <<<HTML
        <section class="setup">
          <div class="title">데이터베이스 설정</div>
          <form method="post" action="">
            <table>
              <tr>
                <td>호스트</td>
                <td><input type="text" name="host" value="$host"></td>
              </tr>
              <tr>
                <td>사용자</td>
                <td><input type="text" name="user" value="$user"></td>
              </tr>
              <tr>
                <td>비밀번호</td>
                <td><input type="text" name="pass" value="$pass"></td>
              </tr>
              <tr>
                <td>DB 이름</td>
                <td><input type="text" name="database" value="$database"></td>
              </tr>
            </table>
            <div class="buttons">
              <input type="hidden" name="action" value="$action">
              <input class="btn" type="submit" name="confirm" value="TEST">
              <input class="btn" type="submit" name="confirm" value="SAVE">
            </div>
          </form>
        </section>
      HTML;
    break;

    // 테이블 생성
    case 'TABLE':
      echo <<<HTML
        <section class="setup">
          <div class="title">테이블 생성</div>
          <form method="post" action="">
            <table>
              <tr>
                <td>생성할 테이블</td>
                <td><input type="text" name="table" value=""></td>
              </tr>
            </table>
            <div class="buttons">
              <input type="hidden" name="do" value="createtable">
              <input class="btn" type="submit" name="confirm" value="생성">
              <input class="btn" type="button" value="메인">
            </div>
          </form>
        </section>
      HTML;
    break;

  }

  
?>

  </div>
</body>
</html>
