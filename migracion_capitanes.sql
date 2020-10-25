CREATE or REPLACE FUNCTION
migrar_usuarios ()
RETURNS void AS $$
BEGIN
  cont = 1
  FOR row in SELECT nombre, edad, genero, pasaporte, nacionalidad FROM personal WHERE cargo='capitán' LOOP
    contrasena = CONCAT(SELECT LEFT(nombre,3), SELECT LEFT(pasaporte,3)
    INSERT INTO usuarios VALUES (cont, row, contrasena)
    cont = cont + 1
  END LOOP;
END
$$ language plpgsql 
