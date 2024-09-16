-----------------------------------------------------------------------
--Stored Procedures & funcions del esquema
-----------------------------------------------------------------------



-----------------------------------------------------------------------
-- FUNCION login_check
--
--Function  para obtener validacion del usuario ingresado, si es docente 
--devuelve 1 si es estudiante devuelve 2 y si no existe el usuario 
--devuelve 0
-----------------------------------------------------------------------
CREATE OR REPLACE FUNCTION login_check(u_username TEXT, u_password TEXT)
RETURNS INTEGER AS $$
DECLARE
    user_role INTEGER;
BEGIN
    -- Buscar el rol del usuario con el nombre y clave proporcionados
    SELECT CASE
        WHEN tipo = '1' THEN 1
        WHEN tipo = '2' THEN 2
        ELSE 0
    END INTO user_role
    FROM user_n
    WHERE nombre = u_username
    AND clave = u_password;

    -- Si no se encontró ningún usuario, devolvemos 0
    IF user_role IS NULL THEN
        RETURN 0;
    END IF;

    RETURN user_role;
END;
$$ LANGUAGE plpgsql;
---------------------------------------------------------------------------------------


----------------------------------------------------------------------------------------
--STORED PROCEDURE add_user_n
--este stored procedure añade un nuevo usuario con su nombre y password
--deseados ademas de el tipo de usuario que seria ya sea 1 docente o 2 estudainte
-----------------------------------------------------------------------------------------
CREATE OR REPLACE PROCEDURE add_user_n(p_nombre VARCHAR, p_clave VARCHAR, p_tipo INTEGER)
LANGUAGE plpgsql AS $$
BEGIN
    -- Insertar el nuevo registro en la tabla user_n
    INSERT INTO user_n (nombre, clave, tipo)
    VALUES (p_nombre, p_clave, p_tipo);

    --mensaje de confirmación
    RAISE NOTICE 'El usuario ha sido insertado con éxito';
END;
$$;
------------------------------------------------------------------------------------------

