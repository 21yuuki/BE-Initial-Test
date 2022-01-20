SELECT b.book_name, CONCAT(a.first_name, " ", a.last_name) AS author_name, b.published_date
FROM books b
  INNER JOIN authors a
  ON b.author_id = a.id
WHERE b.published_date <= "2021-01-31 23:59:59"
ORDER BY b.published_date DESC LIMIT 1
