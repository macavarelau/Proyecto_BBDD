<<<<<<< HEAD
CREATE or REPLACE FUNCTION 
capacidad_instalacion (f_inicio date, f_termino date, idpuerto int)
RETURNS TABLE (instalacion_id int, fecha_atraques date, barcos_cantidad int) AS $$
DECLARE 
  rec1 RECORD;
  contador INT := 0;
  t_curs1 cursor for SELECT DISTINCT * FROM dblink('host=localhost user=grupo85 dbname=grupo85e3 password=pieza312 port=5432', 'SELECT instalaciones.instalacion_id, capacidad FROM instalaciones where puerto_id = idpuerto') AS f1(instalacion_id int, capacidad int);
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

=======
CREATE or REPLACE FUNCTION
capacidad_instalacion (f_inicio timestamp, f_termino timestamp, idpuerto int)
RETURNS TABLE (instalacion_id text, fecha_atraques timestamp) AS $$
DECLARE 
  contador INT;
  t_curs cursor for SELECT t.day::date FROM generate_series(f_inicio, f_termino, interval '1 day') as t(day);
  t_data record;
  t_curs2 cursor for SELECT * FROM dblink('host=localhost user=grupo85 dbname=grupo85e3 password=pieza312 port=5432', 'SELECT permisos.permiso_id as pid, permisos.atraque as fecha, permisos.instalacion_id as iid, instalaciones.capacidad as cap FROM permisos, instalaciones, puertos WHERE permisos.instalacion_id = instalaciones.instalacion_id AND instalaciones.puerto_id = puertos.puerto_id 
  AND puertos.puerto_id = idpuerto') AS permisos_puerto(pid int, fecha timestamp, iid int, cap int);
  t_data2 record;
BEGIN
  CREATE TABLE CANTIDAD(instalacion int, dia timestamp);
    FOR t_data in t_curs LOOP
      contador := 0
      FOR t_data2 in t_curs2 LOOP
        IF t_data2.fecha = t_data.day THEN
          contador := contador + 1
        END IF
        IF contador < t_data2.cap THEN
          INSERT INTO CANTIDAD VALUES(t_data2.iid, t_data2.fecha)
        END IF;
        RETURN QUERY SELECT * FROM CANTIDAD;
        DROP TABLE CANTIDAD;
        RETURN;
END;
$$ language plpgsql;
>>>>>>> 205446712f9959925fe4d763f96d1a3d4d704762
