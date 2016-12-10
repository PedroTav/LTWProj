CREATE TABLE restaurant (
  id INTEGER PRIMARY KEY,
  likes INTEGER,
  name VARCHAR NOT NULL,
  type VARCHAR NOT NULL,
  description VARCHAR NOT NULL
);

CREATE TABLE users (
  username VARCHAR PRIMARY KEY,
  password VARCHAR NOT NULL
);

CREATE TABLE reviews(
  id INTEGER PRIMARY KEY,
  username VARCHAR NOT NULL,
  review VARCHAR NOT NULL,
  cat_id INTEGER REFERENCES restaurant NOT NULL
);

CREATE TABLE menu(
  id INTEGER PRIMARY KEY,
  name VARCHAR NOT NULL,
  price REAL NOT NULL,
  cat_id INTEGER REFERENCES restaurant NOT NULL
);

INSERT INTO restaurant VALUES (1, 35 , 'Canto das Gaveas', 'Fast' , 'O Lorem Ipsum é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.');


INSERT INTO restaurant VALUES (2, 190 , 'Tasca dos Rubins', 'Tasca' , 'O Lorem Ipsu
  m é um texto modelo da indústria tipográfica e de impressão. O Lorem Ipsum tem vindo a ser o texto padrão usado por estas indústrias desde o ano de 1500, quando uma misturou os caracteres de um texto para criar um espécime de livro. Este texto não só sobreviveu 5 séculos, mas também o salto para a tipografia electrónica, mantendo-se essencialmente inalterada. Foi popularizada nos anos 60 com a disponibilização das folhas de Letraset, que continham passagens com Lorem Ipsum, e mais recentemente com os programas de publicação como o Aldus PageMaker que incluem versões do Lorem Ipsum.');
