CREATE or REPLACE FUNCTION
migrar_usuarios ()
RETURNS void AS $$
DECLARE 
  t_curs cursor for SELECT nombre, edad, genero, pasaporte, nacionalidad FROM personal WHERE cargo='capitán';
  t_row personal%rowtype;
BEGIN
  FOR t_row in t_curs LOOP
    INSERT INTO usuarios VALUES (1, t_row, '123456');
  END LOOP;
END;
$$ language plpgsql;
