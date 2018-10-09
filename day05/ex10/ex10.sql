--JOIN combine rows from two or more tables on a related column
SELECT title AS 'Title', summary AS 'Summary', prod_year AS 'Production Year'
  FROM film
  INNER JOIN genre ON genre.id_genre = film.id_genre
  WHERE genre.name = 'erotic'
  ORDER BY prod_year DESC