#MODIFICAR FILAS / ACTUALIZAR DATOS#
UPDATE usuarios SET fecha = CURDATE(), apellidos = 'admin' WHERE id = 4 ; 

# BORRAR #
DELETE FROM usuarios WHERE email = 'admin@admin.com';