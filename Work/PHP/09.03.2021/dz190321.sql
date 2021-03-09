-- максимальная стоимость
SELECT MAX(`stoimost`) AS 'максимальная стоимость'
FROM `tablitsia tovarov`

-- средняя стоимость
SELECT AVG(`stoimost`) AS 'средняя стоимость'
FROM `tablitsia tovarov`

-- количество цен
SELECT COUNT(`stoimost`) AS 'количество цен'
FROM `tablitsia tovarov`

-- минимальная стоимость
SELECT MIN(`stoimost`) AS 'минимальная стоимость'
FROM `tablitsia tovarov`

-- BMW c чёрным окрасом и белым окрасом
SELECT *
FROM `tablitsia tovarov`
WHERE `okras` IN('Чёрный','Белый')

-- BMW c годом между 2004 и 2015
SELECT *
FROM `tablitsia tovarov`
WHERE `god` BETWEEN 2004 AND 2015

-- BMW c E-категорией
SELECT *
FROM `tablitsia tovarov`
WHERE `tovar` LIKE '% E%'

-- для BMW c nomer=9 установить стоимость 90000
UPDATE tablitsia tovarov SET stoimost=90000
WHERE nomer = 9