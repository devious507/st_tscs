DROP TABLE warp_quad;
CREATE TABLE warp_quad(
	warp_single_id serial primary key,
	race varchar,
	era char(3),
	engine_type varchar(10),
	mass int,
	power int,
	computer_required varchar(10),
	stress_columns varchar(10),
	ss numeric,
	service_date int
);
