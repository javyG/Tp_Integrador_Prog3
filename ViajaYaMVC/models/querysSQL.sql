SELECT d.hasta, r.ramales from ramales r
INNER JOIN origen o ON o.desde = 'junin' AND o.ramal = r.ramal_id
INNER JOIN destinos d ON r.ramal_id = d.ramal;

SELECT D.origen,D.destino, D.km FROM distancia D 
INNER JOIN origen o ON o.desde = D.origen 
INNER JOIN destinos d ON d.hasta = D.destino;


SELECT origen, destino ,km ,ramal FROM distancia WHERE origen = origin and destino = destiny
