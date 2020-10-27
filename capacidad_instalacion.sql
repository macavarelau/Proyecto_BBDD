CREATE or REPLACE FUNCTION
capacidad_instalacion (f_inicio timestamp, f_termino timestamp, idpuerto int)
RETURNS TABLE (instalacion_id text, fecha_atraques timestamp) AS $$
DECLARE 
  contador INT;
  t_curs cursor for SELECT t.day::date FROM generate_series(f_inicio, f_termino, interval '1 day') AS t(day timestamp);
  t_row t%rowtype;
  t_curs2 cursor for (SELECT permisos.permiso_id as pid, permisos.atraque as fecha, permisos.instalacion_id as iid, 
                      instalaciones.capacidad as cap FROM permisos, instalaciones, puertos WHERE 
                      permisos.instalacion_id = instalaciones.instalacion_id AND instalaciones.puerto_id = puertos.puerto_id 
                      AND puertos.puerto_id = idpuerto) as permisos_puerto(pid int, fecha timestamp, iid int, cap int);
  t_row2 permisos_puerto%rowtype;
BEGIN
  CREATE TABLE CANTIDAD(instalacion int, dia timestamp);
  FOR t_row in t_curs LOOP
    contador := 0
    FOR t_row2 in t_curs2 LOOP
      IF t_row2.fecha = t_row.day THEN
        contador := contador + 1
      END IF
      IF contador < t_row2.cap THEN
        INSERT INTO CANTIDAD VALUES(t_row2.iid, t_row2.fecha)
      END IF;
      RETURN QUERY SELECT * FROM CANTIDAD;
      DROP TABLE CANTIDAD;
      RETURN;
END;
$$ language plpgsql;