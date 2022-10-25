
use phpcrud;

CREATE TABLE datos_del_usuario(
  id int (4) PRIMARY KEY AUTO_INCREMENT,
  dpi bigint(12) NOT NULL,
  nombres text (50),
  temperatura int (2),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- DESCRIBE task;
