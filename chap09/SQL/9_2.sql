-- WHEREがないとテーブル内のすべてのデータが更新されてしまうので、注意！！
UPDATE member SET old = 21 WHERE id = 1;