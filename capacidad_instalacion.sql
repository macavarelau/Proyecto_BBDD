CREATE or REPLACE FUNCTION 
capacidad_instalacion (f_inicio date, f_termino date, idpuerto int)
RETURNS TABLE (instalacion_id int, fecha_atraques date, barcos_cantidad int) AS $$
DECLARE 
  rec1 RECORD;
  rec2 RECORD;
  rec3 RECORD;
  contador INT := 0;
BEGIN
  CREATE TABLE T1(instalacion int, dia date, cant_barcos int);
  FOR rec1 IN SELECT t.day::date FROM generate_series(f_inicio, f_termino, interval '1 day') AS t(day) LOOP
    FOR rec2 IN SELECT DISTINCT * FROM dblink('host=localhost user=grupo85 dbname=grupo85e3 password=pieza312 port=5432', 'SELECT instalaciones.instalacion_id, capacidad FROM instalaciones') AS f1(instalacion_id int, capacidad int) LOOP
      contador := 0;
      FOR rec3 IN SELECT DISTINCT * FROM dblink('host=localhost user=grupo85 dbname=grupo85e3 password=pieza312 port=5432', 'SELECT permiso_id, atraque, permisos.instalacion_id FROM permisos') AS f2(permiso_id int, atraque date, instalacion_id int) LOOP
        IF rec2.instalacion_id = rec3.instalacion_id AND DATE(rec3.atraque) = rec1.day AND rec2.puerto_id = idpuerto THEN
          contador := contador + 1;
        END IF;
      END LOOP;
      IF contador < rec2.capacidad THEN
        INSERT INTO T1 VALUES(rec2.instalacion_id, rec1.day, contador);
      END IF;
    END LOOP;
  END LOOP;  
  RETURN QUERY SELECT T1.instalacion, T1.dia, T1.cant_barcos FROM T1;
  DROP TABLE T1;
  RETURN;
END;
$$ language plpgsql;

