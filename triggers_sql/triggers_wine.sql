DELIMITER $$
CREATE TRIGGER `before_insert_wine_aoc` BEFORE INSERT ON `wine` FOR EACH ROW BEGIN
    IF  ((SELECT  count(*) 
               FROM aoc 
               where NEW.des_aoc = aoc.des_aoc) = 0) 
      THEN
        INSERT INTO aoc(des_aoc) VALUES (NEW.des_aoc);
    END IF;
END
$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER `before_insert_wine_cat` BEFORE INSERT ON `wine` FOR EACH ROW BEGIN
    END IF;
    IF ((SELECT  count(*) 
          FROM cat 
          where NEW.des_cat = cat.des_cat) = 0)
 
      THEN
        INSERT INTO cat(des_cat)  VALUES (NEW.des_cat);
    END IF;
END
$$
DELIMITER ;