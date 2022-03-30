<?php // 테이블 검사 및 생성

$content .= <<<HTML
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