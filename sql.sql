-- 1 запрос
SELECT MIN(tr.price_per_km), AVG(tr.price_per_km), MAX(tr.price_per_km) FROM transport tr WHERE tr.tonnage > 20;
-- 2 запрос
SELECT * FROM transport tr WHERE tr.speed > 70;
-- 3 запрос
SELECT cat.id, cat.name, cat.title, count(*) AS cnt FROM category cat LEFT JOIN transport tr ON cat.id = tr.category_id GROUP BY cat.id ORDER BY cnt DESC LIMIT 1;
