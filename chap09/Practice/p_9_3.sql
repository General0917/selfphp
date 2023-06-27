-- 3.1
UPDATE book SET price = price * 0.9;

-- 3.2
DELETE FROM book WHERE price >= 2500 AND published < '2015-04-01';

-- 3.3
SELECT title, price, publish, published FROM book WHERE publish = '翔泳社' ORDER BY price, published DESC;

-- 3.4
SELECT uid, unam FROM usr WHERE unam LIKE '山田%';

-- 3.5
SELECT publish, AVG(price) FROM book GROUP BY publish;