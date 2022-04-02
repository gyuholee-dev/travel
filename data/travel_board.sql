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
)