CREATE TABLE publicaciones(
    id INT(13) NOT NULL AUTO_INCREMENT,
    autor INT(13) NOT NULL,
    creado TIMESTAMP NOT NULL DEFAULT NOW(),
    contenido TEXT,
    estado BIT(1) NOT NULL DEFAULT 1,
    PRIMARY KEY(id)
);
CREATE TABLE usuarios(
    id INT(13) NOT NULL AUTO_INCREMENT,
    creado TIMESTAMP NOT NULL DEFAULT NOW(),
    estado BIT(1) NOT NULL DEFAULT 1,
    email VARCHAR(60) NOT NULL,
    clave CHAR(128) NOT NULL,
    salt CHAR(128) NOT NULL,
    PRIMARY KEY(id) 
)