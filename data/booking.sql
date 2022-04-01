CREATE TABLE booking (
  ordernum INT AUTO_INCREMENT,
  orderdate CHAR(19), 
  itemcode CHAR(8),
  schedule CHAR(21),
  location CHAR(20),
  number INT,
  flight VARCHAR(80),
  price INT,
  PRIMARY KEY (ordernum)
)