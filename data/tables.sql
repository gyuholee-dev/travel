/* item 상품
itemcode 상품코드: BE6FCAFC (임의 8자 코드, 자동생성)
itemtitle 상품명: [충주] 충주댐 100배 즐기기
category 카테고리: 국내 / 해외
location 위치: 충주
schedule 일정: 2015-01-01~2011-01-01 (21자, date 입력을 from to 두개로 받아 구분자로 합쳐서 저장)
price 상품가격: 100000 (정수값)

hashtag 해시태그: #자연 #경치 #나무 ('#'은 빼고 구분자로 합쳐서 저장)
topimg 상품이미지: 이미지경로+파일네임 (탑이미지를 리스트 썸네일로도 사용)
image1 디테일이미지1: 이미지경로+파일네임
image2 디테일이미지2: 이미지경로+파일네임
image3 디테일이미지3: 이미지경로+파일네임
image4 디테일이미지4: 이미지경로+파일네임
image5 디테일이미지5: 이미지경로+파일네임

summary 상품 요약: [특급호텔] 그랜드 하얏트 제주 에어텔 3일 어쩌고 가격 어쩌고...
description 상품 상세설명: 상품설명 및 일정 정보...
*/

CREATE TABLE travel_item (
  idx INT AUTO_INCREMENT,
  itemcode CHAR(8),
  itemtitle VARCHAR(80),
  category CHAR(2),
  location CHAR(20),
  schedule CHAR(21),
  price INT,
  hashtag VARCHAR(80),
  topimg VARCHAR(120),
  image1 VARCHAR(120),
  image2 VARCHAR(120),
  image3 VARCHAR(120),
  image4 VARCHAR(120),
  image5 VARCHAR(120),
  event VARCHAR(140),
  summary VARCHAR(140),
  description TEXT,
  PRIMARY KEY (idx)
);

/* booking 예약
ordernum 주문번호: (자동증가)
orderdate 주문일자: Y-m-d H:i:s (19자)
itemcode 상품코드: = item code
schedule 일정: = item schedule
location 위치: = item location
number 예약인원: 3
flight 항공권: 대한항공(항공사) KE1256(편명) CJU(제주)(출발지) (구분자로 구분해서 저장)
price 상품가격: item price x number 
*/
CREATE TABLE travel_booking (
  ordernum INT AUTO_INCREMENT,
  orderdate CHAR(19), 
  itemcode CHAR(8),
  schedule CHAR(21),
  location CHAR(20),
  number INT,
  flight VARCHAR(80),
  price INT,
  PRIMARY KEY (ordernum)
);

/* member 회원
userid 회원아이디
password 비밀번호
username 회원이름
avatar 프로필사진
email 이메일
phone 휴대폰번호 010-1234-5678
address 주소
pgroup 권한 그룹: admin, user...
*/
CREATE TABLE travel_member (
  userid CHAR(20) NOT NULL,
  password CHAR(20),
  nickname VARCHAR(20),
  email CHAR(30),
  phone CHAR(13),
  address VARCHAR(120),
  avatar VARCHAR(120),
  pgroup CHAR(10) DEFAULT 'user',
  PRIMARY KEY (userid)
);

/* board 게시판
postnum 게시물번호: 자동증가
category 게시판 카테고리: notice, qna, review, etc...
title 게시물제목: 최대 80자
content 게시물내용: 최대 1000자
writer 게시물작성자: = member userid
regdate 게시물작성일: Y-m-d H:i:s (19자)
secret 게시물비밀글: 0(공개), 1(비밀글)
hit 게시물 조회수
*/
CREATE TABLE travel_board (
  postnum INT AUTO_INCREMENT,
  category CHAR(10),
  title VARCHAR(80),
  content TEXT,
  writer CHAR(20),
  regdate CHAR(19),
  secret BOOLEAN DEFAULT 0,
  hit INT,
  PRIMARY KEY (postnum)
);



