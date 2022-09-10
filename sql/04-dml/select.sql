#MOSTRAR TODOS LOS REGISTROS / FILAS DE UNA TABLA#
SELECT email, nombre, apellidos FROM usuarios;

#MOSTRAR TODOS LOS CAMPOS#

SELECT * FROM usuarios;

#OPERADORES ARITMETICOS#

SELECT id, email, (id + 7) AS 'OPERACION' FROM usuarios;

#FUNCIONES MATEMATICAS#
SELECT ABS(7) AS 'OPERACION' FROM usuarios;
SELECT CEIL(7.34) AS 'OPERACION' FROM usuarios;
SELECT FLOOR(7.34) AS 'OPERACION' FROM usuarios;
SELECT PI() AS 'OPERACION' FROM usuarios;
SELECT RAND() AS 'OPERACION' FROM usuarios;
SELECT ROUND(7.91,1) AS 'OPERACION' FROM usuarios;
SELECT SQRT(7.91) AS 'OPERACION' FROM usuarios;
SELECT TRUNCATE(7.91,2) AS 'OPERACION' FROM usuarios;
SELECT ROUND(id,2) AS 'OPERACION' FROM usuarios;

#FUNCIONES PARA TEXTOS#

SELECT UPPER(nombre) AS 'CONVERSION' FROM usuarios;
SELECT LOWER(nombre) AS 'CONVERSION' FROM usuarios;

#CONCATENAR#
SELECT CONCAT(nombre,' ', apellidos) AS 'CONVERSION' FROM usuarios;
SELECT UPPER(CONCAT(nombre,' ', apellidos)) AS 'CONVERSION' FROM usuarios;

#TAMANO DEL TEXTO#
SELECT LENGTH(nombre) AS 'CONVERSION' FROM usuarios;

#QUITA ESPACIOS#
SELECT TRIM(CONCAT(nombre,' ', apellidos)) AS 'CONVERSION' FROM usuarios;

#FUNCIONES PARA FECHAS#

#FECHA ACTUAL#

SELECT email, fecha, CURDATE() AS 'Fecha actual' FROM usuarios;

#DIFERENCIA ENTRE UNA FECHA Y OTRA#

SELECT email,  DATEDIFF(fecha, CURDATE()) AS 'Fecha actual' FROM usuarios;

#NOMBRE DEL DIA EN INGLES#
SELECT email,  DAYNAME(fecha) AS 'Fecha actual' FROM usuarios;

#DIA DEL MES SEMANA ANIO#
SELECT email,  DAYOFMONTH(fecha) AS 'Dia del mes' FROM usuarios;
SELECT email,  DAYOFWEEK(fecha) AS 'Dia de la semana' FROM usuarios;
SELECT email,  DAYOFYEAR(fecha) AS 'Dia del anio' FROM usuarios;

SELECT email,  MONTH(fecha) AS 'Mes' FROM usuarios;
SELECT email,  YEAR(fecha) AS 'Anio' FROM usuarios;
SELECT email,  DAY(fecha) AS 'Dia' FROM usuarios;
SELECT email,  HOUR(fecha) AS 'Hora' FROM usuarios;

SELECT email,  CURTIME() AS 'Hora del SISTEMA' FROM usuarios;
SELECT email,  SYSDATE() AS 'Fecha SISTEMA' FROM usuarios;

#FORMATOS PARA LA FECHA#
SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') FROM usuarios;

#FUNCIONES GENERALES#

SELECT email, ISNULL(apellidos) FROM usuarios;
SELECT email, STRCMP('Hola','Hola') FROM usuarios;

SELECT email, VERSION() FROM usuarios;
SELECT email, USER() FROM usuarios;

#MOSTRAR USUARIOS SIN REPETIRLOS#
SELECT DISTINCT USER() FROM usuarios;
SELECT DISTINCT DATABASE() FROM usuarios;

#INDICA SI ES NULO PONE UN TEXTO#
SELECT IFNULL(apellidos, 'Este campo esta vacio') AS 'Apellido' FROM usuarios;





