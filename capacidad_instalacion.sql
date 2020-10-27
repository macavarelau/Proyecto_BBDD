CREATE or REPLACE FUNCTION capacidad_instalacion (f_inicio timestamp, f_termino timestamp)
RETURNS TABLE (instalacion_id text, fecha_atraques timestamp) AS $$
DECLARE 
  rec1 RECORD;
  contador INT;
BEGIN
  FOR rec1 IN 
    SELECT t.day::date FROM generate_series(f_inicio, f_termino, interval '1 day') AS t(day)
  LOOP
    RETURN NEXT rec1.day;
  END LOOP;
END;
$$ language plpgsql;