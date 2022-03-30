<?php // 테이블 검사 및 생성

global $DB;

// DB 접속 
foreach ($dbConfig as $key => $value) {
  $$key = $value;
}
$DB = mysqli_connect($host, $user, $pass, $database);

// 테이블 기본값
$tables = [
  'item' => 'item',
  'user' => 'user',
  'order' => 'order',
  'board' => 'board',
];

// 포스트 서브밋 처리
if (isset($_POST['confirm'])) {
  $drop = isset($_POST['drop']) ? true : false;
  $tables = [
    'item' => $_POST['item'],
    'user' => $_POST['user'],
    'order' => $_POST['order'],
    'board' => $_POST['board'],
  ];

  if ($_POST['confirm']=='생성') { // DB생성
    createTable($tables, $drop);
  } elseif ($_POST['confirm']=='테스트') { // 테스트
    checkTable($tables);
  }
}

$content .= <<<HTML
  <section class="setup">
    <div class="title">테이블 생성</div>
    <form method="post" action="">
      <table>
        <tr>
          <td>상품</td>
          <td><input type="text" name="item" value="$tables[item]" readonly></td>
        </tr>
        <tr>
          <td>주문</td>
          <td><input type="text" name="order" value="$tables[order]" readonly></td>
        </tr>
        <tr>
          <td>회원</td>
          <td><input type="text" name="user" value="$tables[user]" readonly></td>
        </tr>
        <tr>
          <td>게시판</td>
          <td><input type="text" name="board" value="$tables[board]" readonly></td>
        </tr>
      </table>
      <div class="buttons">
        <label><input type="checkbox" name="drop">드랍</label>
        <input class="btn" type="submit" name="confirm" value="생성">
        <input class="btn" type="submit" name="confirm" value="테스트">
      </div>
    </form>
  </section>
HTML;