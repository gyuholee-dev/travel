<html>
    <head>
        <meta charset="utf-8">
        <title>블라썸투어</title>
        <meta name="viewport" content="
        width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="styles/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="scripts/script.js" defer="defer"></script>
        <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-square-round.css" rel="stylesheet">
        <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-pen.css" rel="stylesheet">
     </head>
    <body>
        <header>   
        <div id="top">
          <div class="logo">
            <a href="index.php"><img src="images/logo/logo2.png"></a>
          </div>
          <div class="dropwhere">
            <div class="dropdown-btn"><p>어디로 가세요? ▽</p>
            <div class="dropwhere-cont">
              <a href="#"><p>국내여행지</p></a>
              <a href="#"><p>해외여행지</p></a>
              <a href="#"><p>추천투어</p></a>
              <a href="#"><p>블로그</p></a>
              <a href="#"><p>커뮤니티</p></a>
            </div><!-- dropwhere-cont -->
            </div> 
          </div><!-- dropwhere -->
          <div class="right">
            <a href="#"><p>회사소개</p></a>
            <a href="#"><p>공지사항</p></a>
            <a href="#"><p>내여행</p></a>
            <a href="#"><p>로그인</p></a>
          </div><!-- right -->
        </div><!-- top -->
        </header>
        <div id="bodycolor">
        <section id="content">   
          <div class="search">
            <div class="search-box">
            <div class="search-top">
              <p class="pp1"><a href="#">국내투어</a></p>
              <p class="pp1"><a href="#">해외투어</a></p>
            </div><!-- search-top -->
            <div class="search-bottom">
              <form name="frm1" method="post" action="search_ok.php">
                <br><br>
                <table class="table1">
                    <tr>
                       <td><input type="text" name="place" 
                       placeholder="목적지를 검색하세요.">&nbsp;&nbsp;&nbsp;</td>
                       <td><input type="button" value="search" class="bt" onclick="send()"></td>
                    </tr>
                </table><br><br>   
          </form>
            </div><!-- search-bottom -->
          </div><!-- search-box -->
          </div><!-- search -->
          <div class="main-event">
            <div class="main-event-img"><img src="images/pictures/main3.jpg"></div>
            <div class="main-event-write">
              <p class="pp2">리워드를 통한 확인</p>
              <p class="pp3">블라썸투어의 야침한 이벤트 여기서 확인하세요</p>
            </div>
            <div class="main-event-button">
              <input type="button" value="확인하기" class="bt" onclick="location.href='#'">
            </div>

          </div><!-- main-event -->
          <div class="helper"><p>여행 도우미</p></div><!-- helper -->
          <div class="helper-cont">
            <div><a href="#">
              <img src="images/icons/ig4.png" class="ig4">
              <p>FAQ</p></a>
            </div>
            <div><a href="#">
              <img src="images/icons/ig1.png">
              <p>1:1 고객센터</p></a>
            </div>
            <div><a href="#">
              <img src="images/icons/ig2.png">
              <p>확인/변경</p></a>
            </div>
          </div><!-- helper-cont -->
          <div class="promotion">
            <p>이달의 프로모션</p>
          </div><!-- promotion -->
          <div class="promotion-cont">
            <div class="promo-left">
              <a href="#">
                <img src="images/pictures/promotion.jpg">
                <p>설명내용추가 설명내용추가 설명내용</p>
              </a>
            </div>
            <div class="promo-right">
              <a href="#">
                <img src="images/pictures/main1.jpg">
                <div class="p-box1"></div>
                <div>
                <p>설명내용추가</p>
                <p style="font-weight: bold;font-size: 1.2em;">타이틀</p>
                <p>설명내용추가 설명내용추가</p>
                </div>
              </a>
            </div>
          </div><!-- promotion-cont -->
          <div class="theme">
              <p>블라썸 투어의 테마여행</p>
            </div><!-- theme -->
          <div class="theme-cont">
          <div class="theme-icons">
              <div class="t-icon">
              <div class="t-img1">
                <img src="images/icons/histroy.png" class="history"></div>
                <P class="history">역사·문화</P>
              </div>
              <div class="t-icon">
              <div class="t-img1">
                <img src="images/icons/bilding.png" class="building"></div>
                <P class="building">시티라이프</P>
              </div>
              <div class="t-icon">
              <div class="t-img1">
                <img src="images/icons/house.png" ></div>
                <P class="house">산꼴라이프</P>
              </div>
            </div><!-- theme-icons -->
            <div class="theme-imgs">
            <div class="theme-imgs1">
              <div class="fake">
              <div class="t-images">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/history1.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              <div class="t-images">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/history2.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              <div class="t-images">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/history3.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              </div>
            </div><!-- theme-imgs1 -->
            <div class="theme-imgs2">
            <div class="fake">
            <div class="t-images">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/building1.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              <div class="t-images">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/building2.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              <div class="t-images">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/building3.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div></div>
            </div><!-- theme-imgs2 -->
            <div class="theme-imgs3">
            <div class="fake">
            <div class="t-images">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/house1.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              <div class="t-images">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/house2.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              <div class="t-images">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/house3.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div></div>
            </div><!-- theme-imgs3 -->
            </div><!-- theme-imgs -->
          </div><!-- theme-cont -->
        </section>
        </div> <!-- bodycolor -->
        <div class="clear"></div>
        <footer>
          <div class="policy">
            <p><a href="#"> 이메일무단수집거부</a></p>
            <p> &nbsp;|&nbsp; </p>
            <p><a href="#">개인정보처리방침</a></p>
            <p> &nbsp;|&nbsp; </p>
            <p><a href="#">여행약관</a></p>
            <p> &nbsp;|&nbsp; </p>
            <p><a href="#">해외여행자보험</a></p>
            <p> &nbsp;|&nbsp; </p>
            <p><a href="#">마케팅제휴</a></p>
          </div>
          <div class="bottom-logo"><a href="index.php">
            <img src="images/logo/logo4.png"></a>
          </div>
          <div class="c-info">
          <P>(주)블라썸투어</P>
          <p> &nbsp;|&nbsp; </p>
          <P>대표 : 블라썸 </P>
          <p> &nbsp;|&nbsp; </p>
          <P>주소 : (03161) 서울특별시 종로구 인사동 5길 41</P>
          <p> &nbsp;|&nbsp; </p>
          <P>사업자등록번호 : 102-81-39440</P>
          <p> &nbsp;|&nbsp; </p>
          <P>개인정보 보호책임자 : 블라썸 </P>
          <p> &nbsp;|&nbsp; </p>
          <P>이메일 : 15771233@blossomtour.com</P>
          <p> &nbsp;|&nbsp; </p>
          <P>고객센터 1577-1233</P>
          </div>
          <div class="social-text">
              <p>Team Blossom</p>
          </div>
          <div class="social">
            <div class="s-icon"><a href="http://www.facebook.com"  target="_blank">
                <img src="images/icon/facebook.png">
            </a></div>
            <div class="s-icon"><a href="http://www.naver.com"  target="_blank">
                <img src="images/icon/naverblog.png">
            </a></div>
            <div class="s-icon"><a href="http://www.youtube.com"  target="_blank">
                <img src="images/icon/youtube.png">
            </a></div>
            <div class="s-icon"><a href="http://www.instagram.com"  target="_blank">
                <img src="images/icon/instagram.png">
            </a></div>
          </div><!-- social -->
        </footer>
   </body>
</html>