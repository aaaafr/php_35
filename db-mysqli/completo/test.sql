SELECT *
FROM users
WHERE name = '" . $name . "';

-- SQL Injection
-- SELECT * FROM `users ` WHERE `name` = 'Fab' OR `name` LIKE 'M%'; #--';
