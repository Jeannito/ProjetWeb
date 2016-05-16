
/* Ces deux triggers ne sont pas exploitables a mon plus grand regret car elle ne sont pas completes et je n'ai pas réussi
a récuperer le NEW.des_aoc et le NEW.des_cat car ce ne sont que les id de l'aoc et de la categorie qui sont transmis.
Ils m'auraient cependant été très utiles et m'aurait éviter d'ajouter la fonctionalité de l'ajout du type et de la catégorie 
a l'administrateur.*/


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