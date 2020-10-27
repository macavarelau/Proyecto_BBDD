CREATE or REPLACE FUNCTION 
capacidad_instalacion (f_inicio date, f_termino date, idpuerto int)
RETURNS TABLE (instalacion_id int, fecha_atraques date, barcos_cantidad int) AS $$
DECLARE 
  rec1 RECORD;
  contador INT := 0;
  t_curs1 cursor for SELECT DISTINCT * FROM dblink('host=localhost user=grupo85 dbname=grupo85e3 password=pieza312 port=5432', 'SELECT * FROM instalaciones where puerto_id = idpuerto') AS f1(instalacion_id int, capacidad int);
  t_row1 instalaciones%rowtype;
  t_curs2 cursor for SELECT DISTINCT * FROM dblink('host=localhost user=grupo85 dbname=grupo85e3 password=pieza312 port=5432', 'SELECT permiso_id, atraque, permisos.instalacion_id FROM permisos') AS f2(permiso_id int, atraque date, instalacion_id int);
  t_row2 permisos%rowtype;
BEGIN
  CREATE TABLE T1(instalacion int, dia date, cant_barcos int);
  FOR rec1 IN SELECT t.day::date FROM generate_series(f_inicio, f_termino, interval '1 day') AS t(day) LOOP
    FOR t_row1 in t_curs1 LOOP
      contador := 0;
      FOR t_row2 in t_curs2 LOOP
        IF t_row1.instalacion_id = t_row2.instalacion_id AND DATE(t_row2.atraque) = rec1.day THEN
          contador := contador + 1;
        END IF;
      END LOOP;
      IF contador < t_row1.capacidad THEN
        INSERT INTO T1 VALUES(t_row1.instalacion_id, rec1.day, contador);
      END IF;
    END LOOP;
  END LOOP;  
  RETURN QUERY SELECT T1.instalacion, T1.dia, T1.cant_barcos FROM T1;
  DROP TABLE T1;
  RETURN;
END;
$$ language plpgsql;

