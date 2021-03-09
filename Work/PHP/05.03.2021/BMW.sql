-- Выбрать BMW стоимостью менее 70000
SELECT * 
FROM `tablitsia tovarov` 
WHERE stoimost < 70000

-- Выбрать BMW c чёрным окрасом
SELECT * 
FROM `tablitsia tovarov` 
WHERE okras='Чёрный'

-- Выбрать BMW c чёрным окрасом и годом от 2006
SELECT * 
FROM `tablitsia tovarov` 
WHERE okras='Чёрный' and god>2006

-- Выбрать BMW c белым окрасом и массой более 1500
SELECT * 
FROM `tablitsia tovarov` 
WHERE okras='Белый' and massa>1500

-- отсортировать таблицу по размерам и цене
SELECT *
FROM `tablitsia tovarov` 
ORDER BY razmer, stoimost

-- выводит BMW с ценой в долларах
SELECT `tovar`,`stoimost`/ 2.6 AS 'USD'
FROM `tablitsia tovarov`

