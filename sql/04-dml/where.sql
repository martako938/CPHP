# CONSULTA CON UNA CONDICION #
SELECT * FROM usuarios WHERE email = 'admin@admin.com';

/*
OPERADORES DE COMPARACION
Igual           =
Distinto        != 
Menor           <
Mayor           >
Menor o igual   <=
Mayor o igual   >=
Entre           betwen A and B
En              in
Es nulo         is null
No nulo         is not null
Como            like
No es como      not like
 
OPERADORES LOGICOS
o       OR
y       AND
NO      NOT 

COMODINES
Cualquier cantidad de carateres:  %
Un caracter desconocido:  _
 */

 #EJEMPLOS#

 # 1 Nombre y apellidos de usuarios registrados en 2020 #
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = '2020';
 
 # 2 Nombre y apellidos de usuarios no registrados en 2020#
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != '2020' OR ISNULL(fecha);

 # 3 Mostrar el email de los usuarios cuyo apellido tenga la letra i  y la contrasena sea 1234 #
SELECT nombre FROM usuarios WHERE apellidos LIKE '%i%' AND password ='1234';

 # 4 Registro cuyo anio sea par #
SELECT nombre FROM usuarios WHERE(YEAR(fecha)%2 = 0);

 # 5 Usuario cuyo nombre tenga mas de 5 letras este registrado antes de 2021 y se vea en mayuscula #
SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2021; 

# ORDENAR #
SELECT * FROM usuarios ORDER BY id DESC;
SELECT * FROM usuarios ORDER BY fecha ASC;
SELECT * FROM usuarios LIMIT 1;

# Muestra solo 2 despues del registro 2 #
SELECT * FROM usuarios LIMIT 2,2;

# Muestra solo 1 despues del registro 3 #
SELECT * FROM usuarios LIMIT 3,1;
