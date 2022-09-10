/*
SUBCONSULTAS
- Son consultas que se ejecutan dentro de otras
- Consiste en utilizar los resultados de la subconsulta para operar en la
  consulta principal
- Jugando con las claves ajenas / foraneas  
*/

INSERT INTO  usuarios VALUES(NULL, 'Admin', 'Admin', 'admin@admin.com', 'admin', CURDATE());

SELECT * FROM usuarios WHERE id IN(
    SELECT usuario_id FROM entradas
);

SELECT * FROM usuarios WHERE id NOT IN(
    SELECT usuario_id FROM entradas
);


#EJEMPLOS#
#Sacar los usuarios que tengan alguna entrada que en su titulo hable de GTA#
INSERT INTO entradas VALUES(NULL, 3, 1, "Guia de GTA Vice City", "GTA", CURDATE());

SELECT nombre, apellidos FROM usuarios WHERE id 
    IN (SELECT usuario_id FROM entradas WHERE titulo LIKE "%GTA%");

 #Sacar todas las entradas de la categoria Accion utilizando su nombre#

 SELECT titulo FROM entradas WHERE categoria_id
    IN (SELECT id FROM categorias WHERE nombre LIKE "Accion" );

 #Mostrar el nombre de las categorias con mas de 3 entradas#
SELECT nombre FROM categorias WHERE id 
    IN(SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >= 3);

 #Mostrar los usuarios que crearon una entrada un viernes#
 SELECT nombre FROM usuarios WHERE id
    IN(SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha) = 6 ); 

 #Mostrar el nombre del usuario que tenga mas entradas#
 INSERT INTO entradas VALUES(NULL, 1, 2, 'Jugando con SQL', 'SQL', CURDATE());
 #COMO SOLO DA UN RESILTADO SE USA ID = #
 SELECT CONCAT(nombre, ' ', apellidos) AS 'El usuario con mas entradas' FROM usuarios WHERE id
    =(SELECT usuario_id FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1); 

 #Mostrar las categorias sin entradas#
INSERT INTO categorias VALUES(NULL, 'Plataformas'); 

SELECT * FROM categorias WHERE id 
    NOT IN(SELECT categoria_id FROM entradas );




