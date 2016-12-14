CREATE TABLE restaurant (
  id INTEGER PRIMARY KEY,
  likes INTEGER,
  name VARCHAR NOT NULL,
  type VARCHAR NOT NULL,
  description VARCHAR NOT NULL
  cat_user VARCHAR REFERENCES users NOT NULL
);

CREATE TABLE users (
  username VARCHAR PRIMARY KEY,
  password VARCHAR NOT NULL
);

CREATE TABLE Favorites (
  user_id VARCHAR NOT NULL REFERENCES users,
  rest_id INTEGER NOT NULL REFERENCES restaurant
);

CREATE TABLE reviews(
  id INTEGER PRIMARY KEY,
  username VARCHAR NOT NULL,
  review VARCHAR NOT NULL,
  reply INTEGER REFERENCES reviews,
  cat_id INTEGER REFERENCES restaurant NOT NULL
);

CREATE TABLE menu(
  id INTEGER PRIMARY KEY,
  name VARCHAR NOT NULL,
  price REAL NOT NULL,
  cat_id INTEGER REFERENCES restaurant NOT NULL
);

INSERT INTO restaurant VALUES (1, 35 , 'Canto das Gaveas', 'Fast' , 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis arcu ac dui laoreet eleifend. Sed id mauris ante. Etiam eget elementum nunc, vel tempor erat. Vivamus id dapibus erat. Aenean dolor tellus, viverra quis ultricies sit amet, malesuada ut lorem. Etiam urna est, scelerisque ac tempus in, porttitor vel dui. Sed sit amet tortor tincidunt, tincidunt orci sed, tincidunt tortor. Quisque sit amet ex feugiat, tempus ex eget, fringilla ex.');


INSERT INTO restaurant VALUES (2, 190 , 'Tasca dos Rubins', 'Tasca' , 'Mauris gravida tortor sed metus rutrum, at varius lacus fringilla. In eleifend venenatis nisi, sit amet ornare arcu gravida in. Curabitur eu lacus accumsan, consequat sapien et, consectetur enim. Etiam egestas sodales nisl, sed fermentum mauris varius ac. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent a porttitor augue. Duis quis diam sem.');
