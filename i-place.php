<html>
    <head>
        <meta charset="utf-8">
        <title>블라썸투어</title>
        <meta name="viewport" content="
        width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/logo/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="styles/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script src="javascript/script.js" defer="defer"></script>
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
              <p><a href="#">국내여행지</a></p>
              <p><a href="#">해외여행지</a></p>
              <p><a href="#">추천투어</a></p>
              <p><a href="#">블로그</a></p>
              <p><a href="#">커뮤니티</a></p>
            </div><!-- dropwhere-cont -->
            </div> 
          </div><!-- dropwhere -->
          <div class="right">
            <P><a href="#">회사소개</a></P>
            <P><a href="#">공지사항</a></P>
            <P><a href="#">내여행</a></P>
            <P><a href="#">로그인</a></P>
          </div><!-- right -->
        </div><!-- top -->
        </header>
        <div id="bodycolor">
        <section id="content">   
          <div class="search" style="height: 320px;">
            <div class="search-box" style="width: 800px; height: 320px;">
            <div class="search-top">
              <p class="pp1"><a href="#">국내투어</a></p>
              <p class="pp1" style="color: #F26E62;"><a href="#">해외투어</a></p>
            </div><!-- search-top -->
            <div class="search-bottom" style="height: 100px;">
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
            <div class="location">
                <ul>
                    <li><a href="#">동남아시아</a></li>
                   <li><a href="#">필리핀 </a></li>
                   <li><a href="#">라오스 </a></li>
                   <li><a href="#">태국 </a></li>
                   <li><a href="#">말레이시아 </a></li>
                   <li><a href="#">베트남 </a></li>
                   <li><a href="#">캄보디아 </a></li>
                </ul>
                <ul>
                    <li><a href="#">유럽</a></li>
                   <li><a href="#">남태평양 </a></li>
                   <li><a href="#">홍대입구 </a></li>
                   <li><a href="#">압구정 </a></li>
                   <li><a href="#">연신내 </a></li>
                   <li><a href="#">석촌 </a></li>
                   <li><a href="#">신도림 </a></li>
                </ul>
                <ul>
                    <li><a href="#">남태평양 </a></li>
                   <li><a href="#">영등포 </a></li>
                   <li><a href="#">홍대입구 </a></li>
                   <li><a href="#">압구정 </a></li>
                   <li><a href="#">연신내 </a></li>
                   <li><a href="#">석촌 </a></li>
                   <li><a href="#">신도림 </a></li>
                   <li><a href="#">부산 </a></li>
                   <li><a href="#">대구 </a></li>
                   <li><a href="#">김해</a> </a></li>
                </ul>
                <ul>
                    <li><a href="#">오세아니아 </a></li>
                   <li><a href="#">영등포 </a></li>
                   <li><a href="#">홍대입구 </a></li>
                   <li><a href="#">압구정 </a></li>
                   <li><a href="#">연신내 </a></li>
                   <li><a href="#">석촌 </a></li>
                   <li><a href="#">신도림 </a></li>
                </ul>
                <ul>
                    <li><a href="#">북중미 </a></li>
                   <li><a href="#">미국 </a></li>
                   <li><a href="#">캐나다 </a></li>
                   <li><a href="#">멕시코 </a></li>
                   <li><a href="#">바하마 </a></li>
                   <li><a href="#">페루 </a></li>
                   <li><a href="#">브라질 </a></li>
                </ul>
            </div>
          </div><!-- search-box -->
          </div><!-- search -->
          <div class="clear"></div>
          <div class="k-product"><p>해외투어 모든상품</p>
          </div><!-- k-product -->
          <div class="k-product-cont">
              <div class="t-images1">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/history1.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              <div class="t-images1">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/history2.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              <div class="t-images1">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/history3.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a>
              </div>
              <div class="t-images1">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/building1.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              <div class="t-images1">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/building2.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              <div class="t-images1">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/building3.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              <div class="t-images1">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/house1.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              <div class="t-images1">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/house2.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
              <div class="t-images1">
                <a href="#">
                <div class="t-img">  
                <img src="images/pictures/house3.jpg"></div>
                <p>여기에 타이틀 내용적어주세요</p>
                <p>500,000원 부터~</p>
                <p class="hash">#자연&nbsp;</p>
                <p class="hash">#경치&nbsp;</p>
                <p class="hash">#나무&nbsp;</p>
              </a></div>
            </div><!-- k-product-cont -->
            <div class="clear"></div>
            <div class="morebox">
            <div class="more1">
                <a href="#"><p>더보기</p></a>
            </div></div>
        
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