CREATE TABLE member (
  userid CHAR(20) NOT NULL,
  username VARCHAR(20),
  password CHAR(20),
  email CHAR(30),
  phone CHAR(13),
  address VARCHAR(120),
  pgroup CHAR(10) DEFAULT 'user',
  PRIMARY KEY (userid)
)