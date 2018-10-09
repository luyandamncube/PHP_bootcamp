INSERT INTO ft_table(login, access, creation_date)
   SELECT last_name AS login, 'other' AS access, birthdate AS creation_date
   FROM base_student.user_card
   WHERE last_name LIKE '%a%' AND LENGTH(last_name) < 9
   ORDER BY last_name ASC
   LIMIT 10;