CREATE TABLE prim (
    id_animals INT(3) NOT NULL AUTO_INCREMENT,
    img_link VARCHAR(20) NOT NULL,
    zone INT(3) NOT NULL,
    PRIMARY KEY (id_animals)
) ENGINE=InnoDB ;

INSERT INTO prim (img_link, zone) VALUES
('yvette', 0),
('boop', 2), 
('fofo', 1), 
('dozy', 1), 
('speedy', 3), 
('harry', 1), 
('surfy', 0), 
('dipsy', 1), 
('rorry', 0), 
('scotty', 2), 
('roberto', 2), 
('popole', 1), 
('pit', 2), 
('max', 0), 
('cookie', 0), 
('marcus', 3),
('plastic', 10), 
('nuke', 10), 
('poach', 10);