DELIMITER $$
CREATE TRIGGER `before_delete_user` BEFORE DELETE ON `user` FOR EACH ROW BEGIN
    IF  ((SELECT COUNT(*) FROM notice WHERE OLD.id_user = notice.id_user) > 0) 
 
      THEN
        DELETE FROM notice WHERE notice.id_user = OLD.id_user;
    END IF;
    
END
$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER `before_add_notice` BEFORE INSERT ON `notice` FOR EACH ROW BEGIN
    IF  ((SELECT COUNT(*) FROM notice WHERE NEW.id_user = notice.id_user AND NEW.id_wine = notice.id_wine) > 0) 
 
      THEN
        DELETE FROM notice WHERE notice.id_user = NEW.id_user;
    END IF;
    
END
$$
DELIMITER ;