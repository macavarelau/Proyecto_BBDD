CREATE or REPLACE FUNCTION
migrar_usuarios ()
RETURNS void AS $$
DECLARE 
  t_curs cursor for SELECT nombre, edad, genero, pasaporte, nacionalidad FROM personal WHERE cargo='capitán';
  t_row personal%rowtype;
BEGIN
  FOR t_row in t_curs LOOP
    INSERT INTO usuarios(nombre, edad, sexo, pasaporte, nacionalidad, contrasena) VALUES (t_row.nombre, t_row.edad, t_row.genero, t_row.pasaporte, t_row.nacionalidad, CONCAT(LEFT(t_row.nombre, 3), LEFT(t_row.pasaporte, 3)));
  END LOOP;
END;
$$ language plpgsql;
