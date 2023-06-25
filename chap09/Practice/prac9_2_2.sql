INSERT INTO products (pname, price, category) VALUES ('メロン', 500, '食物');

INSERT INTO products (pname, price, category) VALUES ('マンゴー', 120, '食物');

INSERT INTO products (pname, price, category) VALUES ('シャープペンシル', 100, '文房具');

INSERT INTO products (pname, price, category) VALUES ('消しゴム', 50, '文房具');

-- 以下のSQLでもデータが挿入可能
-- 以下のSQLでデータを挿入する場合は、idカラムも指定する必要がある
-- 前列を指定している場合は、列名の指定は省略可能（デフォルト値は設定している場合は省略可能）

-- INSERT INTO products VALUES (1, 'メロン', 500, '食物');

-- INSERT INTO products VALUES (2, 'マンゴー', 120, '食物');

-- INSERT INTO products VALUES (3, 'シャープペンシル', 100, '文房具');

-- INSERT INTO products VALUES (4, '消しゴム', 50, '文房具');
