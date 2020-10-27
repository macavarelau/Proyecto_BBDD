CREATE or REPLACE FUNCTION
migrar_usuarios2 ()
RETURNS void AS $$
DECLARE 
  t_curs cursor for SELECT DISTINCT * FROM dblink('host=localhost user=grupo85 dbname=grupo85e3 password=pieza312 port=5432', 'SELECT nombre, edad, sexo, rut FROM personal, trabajaen WHERE rut=trut AND jefe=true') AS t1(nombre varchar, edad int, sexo varchar, rut varchar);
  t_row personal%rowtype;
BEGIN
  FOR t_row in t_curs LOOP
    INSERT INTO usuarios(nombre, edad, sexo, pasaporte, nacionalidad, contrasena) VALUES (t_row.nombre, t_row.edad, t_row.sexo, t_row.rut, 'CHILENA', CONCAT(LEFT(t_row.nombre, 3), LEFT(t_row.rut, 3)));
  END LOOP;
END;
$$ language plpgsql;
