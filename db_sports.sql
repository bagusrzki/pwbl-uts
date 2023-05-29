CREATE TABLE tb_pbola (
  id_pbola int(50) NOT NULL AUTO_INCREMENT,
  nama_pbola varchar(100) NOT NULL,
  hrg_pbola varchar(50) NOT NULL,
  PRIMARY KEY(id_pbola)
);
CREATE TABLE tb_pbadminton (
  id_pbadminton int(50) NOT NULL AUTO_INCREMENT,
  nama_pbadminton varchar(100) NOT NULL,
  hrg_pbadminton varchar(50) NOT NULL,
  PRIMARY KEY(id_pbadminton)
);
CREATE TABLE tb_pbasket (
  id_pbasket int(50) NOT NULL AUTO_INCREMENT,
  nama_pbasket varchar(100) NOT NULL,
  hrg_pbasket varchar(50) NOT NULL,
  PRIMARY KEY(id_pbasket)
);