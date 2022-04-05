CREATE TABLE travel_member (
  userid CHAR(20) NOT NULL,
  password BLOB,
  nickname VARCHAR(20),
  email CHAR(30),
  phone CHAR(13),
  address VARCHAR(120),
  avatar VARCHAR(120),
  groups CHAR(10) DEFAULT 'user',
  PRIMARY KEY (userid)
)