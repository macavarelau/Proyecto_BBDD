CREATE or REPLACE FUNCTION
migrar_usuarios ()
RETURNS void AS $$
BEGIN
  FOR row in SELECT nombre, edad, genero, pasaporte, nacionalidad FROM personal WHERE cargo='capitán' LOOP
    INSERT INTO usuarios VALUES (row, CONCAT(SELECT LEFT(nombre,3), SELECT LEFT(pasaporte,3))
  END LOOP;
END
$$ language plpgsql 
