<?php


$content .= <<<HTML
  <div class="search">
    <div class="search-box">
    <div class="search-top">
      <p><a href="#">국내투어</a></p>
      <p><a href="#">해외투어</a></p>
    </div><!-- search-top -->
    <div class="search-bottom">
      <form name="frm1" method="post" action="search_ok.php">
        <br><br>
        <table class="table1">
            <tr>
                <td><input type="text" name="place" value="목적지를 검색하세요"></td>
                <td><input type="button" value="search" class="bt" onclick="send()"></td>
            </tr>
        </table><br><br>   
  </form>
    </div><!-- search-bottom -->
  </div><!-- search-box -->
  </div><!-- search -->
  <div class="main-event">
    <div class="main-event-img"><img src=""></div>
    <div class="main-event-write">
      <p>리워드를 통한 확인</p>
      <p>블라썸투어의 야침한 이벤트 여기서 확인하세요</p>
    </div>
    <div class="main-event-button">
      <input type="button" value="search" class="bt" onclick="location.href='#'">
    </div>

  </div><!-- main-event -->
  <div class="helper">여행 도우미</div><!-- helper -->
  <div class="helper-cont">
    <div><a href="#">
      <img src="">
      <p>FAQ</p></a>
    </div>
    <div><a href="#">
      <img src="">
      <p>1:1 고객센터</p></a>
    </div>
    <div><a href="#">
      <img src="">
      <p>확인/변경</p></a>
    </div>
  </div><!-- helper-cont -->
  <div class="promotion">
    <p>이달의 프로모션</p>
  </div><!-- promotion -->
  <div class="promotion-cont">
    <div class="promo-left">
      <a href="#">
        <img src="images/">
        <p>설명내용추가</p>
      </a>
    </div>
    <div class="promo-right">
      <a href="#">
        <img src="images/">
        <div>
        <p>설명내용추가</p>
        <p>타이틀</p>
        <p>설명내용추가</p>
        </div>
      </a>
    </div>
  </div><!-- promotion-cont -->
  <div class="theme">블라썸 투어의 테마여행</div><!-- theme -->
  <div class="theme-cont">
    <div class="theme-icons">
      <div class="t-icon">
        <img src="images/">
        <P>역사·문화</P>
      </div>
      <div class="t-icon">
        <img src="images/">
        <P>시티라이프</P>
      </div>
      <div class="t-icon">
        <img src="images/">
        <P>산꼴라이프</P>
      </div>
    </div><!-- theme-icons -->
    <div class="theme-imgs1">
      <div class="t-images"><a href="#">
        <img src="images/">
        <p>여기에 타이틀 내용적어주세요</p>
        <p>500,000원 부터~</p>
        <p class="hash">자연</p>
        <p class="hash">경치</p>
        <p class="hash">나무</p>
      </a></div>
      <div class="t-images"><a href="#">
        <img src="images/">
        <p>여기에 타이틀 내용적어주세요</p>
        <p>500,000원 부터~</p>
        <p class="hash">자연</p>
        <p class="hash">경치</p>
        <p class="hash">나무</p>
      </a></div>
      <div class="t-images"><a href="#">
        <img src="images/">
        <p>여기에 타이틀 내용적어주세요</p>
        <p>500,000원 부터~</p>
        <p class="hash">자연</p>
        <p class="hash">경치</p>
        <p class="hash">나무</p>
      </a></div>
    </div><!-- theme-imgs1 -->
    <div class="theme-imgs2">
      <div class="t-images">
        <img src="images/">
        <p>여기에 타이틀 내용적어주세요</p>
        <p>500,000원 부터~</p>
        <p class="hash">자연</p>
        <p class="hash">경치</p>
        <p class="hash">나무</p>
      </a></div>
      <div class="t-images"><a href="#">
        <img src="images/">
        <p>여기에 타이틀 내용적어주세요</p>
        <p>500,000원 부터~</p>
        <p class="hash">자연</p>
        <p class="hash">경치</p>
        <p class="hash">나무</p>
      </a></div>
      <div class="t-images"><a href="#">
        <img src="images/">
        <p>여기에 타이틀 내용적어주세요</p>
        <p>500,000원 부터~</p>
        <p class="hash">자연</p>
        <p class="hash">경치</p>
        <p class="hash">나무</p>
      </a></div>
    </div><!-- theme-imgs2 -->
    <div class="theme-imgs3">
      <div class="t-images">
        <img src="images/">
        <p>여기에 타이틀 내용적어주세요</p>
        <p>500,000원 부터~</p>
        <p class="hash">자연</p>
        <p class="hash">경치</p>
        <p class="hash">나무</p>
      </a></div>
      <div class="t-images"><a href="#">
        <img src="images/">
        <p>여기에 타이틀 내용적어주세요</p>
        <p>500,000원 부터~</p>
        <p class="hash">자연</p>
        <p class="hash">경치</p>
        <p class="hash">나무</p>
      </a></div>
      <div class="t-images"><a href="#">
        <img src="images/">
        <p>여기에 타이틀 내용적어주세요</p>
        <p>500,000원 부터~</p>
        <p class="hash">자연</p>
        <p class="hash">경치</p>
        <p class="hash">나무</p>
      </a></div>
    </div><!-- theme-imgs3 -->
  </div><!-- theme-cont -->
HTML;