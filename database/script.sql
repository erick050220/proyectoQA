
use phpcrud;

CREATE TABLE Datos_del_Usuario(
  id INT(4) PRIMARY KEY AUTO_INCREMENT,
  dpi VARCHAR(14) NOT NULL,
  nombres varchar (50),
  temperatura int (2),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- DESCRIBE task;
