SELECT last_name, first_name, birthdate as 'birthdate' 
FROM user_card
WHERE year(birthdate) = 1989 
ORDER BY last_name ASC;