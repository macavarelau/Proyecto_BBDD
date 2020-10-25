CREATE or REPLACE FUNCTION
migrar_usuarios ()
RETURNS void AS $$
DECLARE row personal%rowtype;
BEGIN
  FOR row in SELECT nombre, edad, genero, pasaporte, nacionalidad FROM personal WHERE cargo='capitán' LOOP
    INSERT INTO usuarios VALUES (row, '123456')
  END LOOP;
END
$$ language plpgsql 
