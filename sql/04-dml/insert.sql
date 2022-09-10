# INSERTAR NUEVOS REGISTROS #
INSERT INTO usuarios values(null, 'Brayan', 'Cabrera', 'martako938@gmail.com', '1234', '2022-08-11');
INSERT INTO usuarios values(null, 'Antonio', 'Mancilla', 'veterom@gmail.com', '1234', '2020-03-08');
INSERT INTO usuarios values(null, 'Evelin', 'Cabrera', 'nefnactu@gmail.com', '1234', '2021-02-01');

#INSERTAR FILAS SOLO CON CIERTAS COLUMNAS#
INSERT INTO usuarios(email, password) VALUES('admin@admin.com', 'admin');