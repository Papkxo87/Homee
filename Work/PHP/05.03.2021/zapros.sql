-- В MySQL Столбец это ПОЛЕ а строка называется ЗАПИСЬ либо....
-- В MySQL Столбец это АТРИБУТ а строка называется КОРТЕЖ
-- sum min max avg count - функции агрегирования
-- https://dev.mysql.com/doc/refman/8.0/en/aggregate-functions.html
-- % - любое количество любых символов
-- _ - один любой символ 


-- находит работников с зарплатой больше 100 и меньше 450
SELECT *
FROM `vedomost` 
WHERE zp>100 and zp<450

-- найти работников в бугалтерии с зарплатой больше 300
SELECT *
FROM `vedomost` 
WHERE otdel="Bugalteria" and zp>300

-- найти работников бугалтерии и финансов
SELECT *
FROM `vedomost` 
WHERE otdel="Bugalteria" or otdel="Finansi"

-- найти работников c зарплатой больше 500 и НЕ работающего в бугалтерии
SELECT *
FROM `vedomost` 
WHERE zp>500 and not otdel="Bugalteria"

-- отсортировать по зарплате
SELECT *
FROM `vedomost` 
ORDER BY zp

-- отсортировать по зарплате в обратном порядке
SELECT *
FROM `vedomost` 
ORDER BY zp DESC

-- вывести список работников по алфовиту
SELECT *
FROM `vedomost` 
ORDER BY fio

-- отсортировать таблицу по отделам и зарплате
SELECT *
FROM `vedomost` 
ORDER BY otdel,zp

-- отсортировать таблицу по отделам в прямом направлении и fio в обратном направлении
SELECT *
FROM `vedomost` 
ORDER BY otdel, fio DESC

-- изменяет fio на name
SELECT `fio` AS 'name',`zp`
FROM `vedomost`

-- изменяет поля на англиском на русские
SELECT `fio` AS 'Имя',`zp` AS 'Зарплата', `nomer` AS 'Номер',`otdel` as 'Отдел'
FROM `vedomost`

-- выводит зарплату в долларах
SELECT `fio`,`zp`/2.6 AS 'USD'
FROM `vedomost`

-- выводит округлённую зарплату в долларах
SELECT `fio`,ROUND(`zp`/ 2.6,2) AS 'USD'
FROM `vedomost`

-- вывести список работ-в бух-и и их з/п в рос.рублях
SELECT `fio`,`otdel`,round(`zp`/0.035,2) AS 'RUB'
FROM `vedomost`
WHERE otdel="Bugalteria"

-- вывести список работ-в бух-и и их з/п в разных валютах
SELECT `fio`,`otdel`,round(`zp`/0.035,2) AS 'RUB',round(`zp`/3.23,2) AS 'EUR',round(`zp`/0.12,2) AS 'BUR'
FROM `vedomost`
WHERE otdel="Bugalteria"

-- создать новую таблицу
CREATE TABLE ved (
id integer,
fio varchar(50),
zp float
)

-- установить zp 1000 для id=1
UPDATE ved SET zp=1000
WHERE id = 3

-- добавить строку
INSERT INTO `ved` (`fio`,`zp`)
VALUES('Сергей Сергеевич',700);

--всем у кого zp<500, увеличить zp на 15%
UPDATE ved SET zp = zp*1.5
WHERE zp < 500

--удалить строку с id=5
DELETE FROM `ved` WHERE id=5

--удалить таблицу
DROP TABLE ved;

-- кадры + 10% к зарплате
UPDATE vedomost SET zp = zp*1.1
WHERE otdel = 'Kadri'

-- найти кто начинается с буквы S
SELECT * 
FROM `vedomost` 
WHERE `fio` LIKE 'S%'

-- найти всех Сергеевичей
SELECT * 
FROM `vedomost` 
WHERE `fio` LIKE '%Sergeevich'

-- ищет где имя заканчивается на OV
SELECT *
FROM `vedomost`
WHERE `fio` LIKE '%ov % %'

-- выбрать где зарплата между 100 и 800
SELECT * 
FROM `vedomost` 
WHERE `zp` BETWEEN 100 AND 800

-- вывесть работников с табельным номером 2,4,5
SELECT * 
FROM `vedomost` 
WHERE `nomer` IN(2,4,5)

-- вывесть работников которые работают на складе и в бугалтерии
SELECT * 
FROM `vedomost` 
WHERE `otdel` IN('Sklad','Bugalteria')

-- вывесть работников которые имеют zp 550 и 110
SELECT * 
FROM `vedomost` 
WHERE `zp` IN(550,110)

-- сумма зарплат
SELECT SUM(`zp`) AS 'сумма ЗАРПЛАТ'
FROM `vedomost`

-- минимальная ЗАРПЛАТА
SELECT MIN(`zp`) AS 'минимальная ЗАРПЛАТА'
FROM `vedomost`

-- максимальная ЗАРПЛАТА
SELECT MAX(`zp`) AS 'максимальная ЗАРПЛАТА'
FROM `vedomost`

-- средняя ЗАРПЛАТА
SELECT AVG(`zp`) AS 'средняя ЗАРПЛАТА'
FROM `vedomost`

-- количество ЗАРПЛАТ
SELECT COUNT(`zp`) AS 'количество ЗАРПЛАТ'
FROM `vedomost`

-- найти человека с самой большой зарплатой
SELECT
    `fio`
FROM
    `vedomost`
WHERE
    `zp` =(
SELECT
    MAX(`zp`)
FROM
    `vedomost`
)

-- найти человека с самой маленькой зарплатой
SELECT
    `fio`
FROM
    `vedomost`
WHERE
    `zp` =(
SELECT
    MIN(`zp`)
FROM
    `vedomost`
)

-- найти человека с зарплатой выше средней
SELECT
    `fio`
FROM
    `vedomost`
WHERE
    `zp` >(
SELECT
    AVG(`zp`)
FROM
    `vedomost`
)

-- найти количество человек в каждом отделе
SELECT `otdel`, COUNT(*)
FROM `vedomost`
GROUP BY `otdel`

-- найти количество человек в бухгалтерии
SELECT `otdel`, COUNT(*)
FROM `vedomost`
WHERE `otdel`="бухгалтерия"
GROUP BY `otdel`

-- выводит отделы где 2 и более человек
SELECT `otdel`, COUNT(*)
FROM `vedomost`
GROUP BY `otdel`
HAVING COUNT(*)>=2

-- выводит среднюю зарплатув каждом отделе
SELECT
    `otdel`,
    AVG(`zp`)
FROM
    vedomost
GROUP BY
    `otdel`

-- найти минимальную и максимальную зарплату в каждом отделе
    SELECT 
    `otdel`,
    MAX(`zp`),MIN(`zp`)
FROM
    vedomost
GROUP BY
    `otdel`

-- найти максимальную зарплату в отделах где работает больше одного человека
SELECT `otdel`, MAX(`zp`)
FROM vedomost
GROUP BY `otdel` HAVING COUNT(*)>1

-- сколько продавцов в каждом городе
SELECT `CITY`, COUNT(*)
FROM `salespeople`
GROUP BY `CITY`

-- сколько клиентов в каждом городе
SELECT `CITY`, COUNT(*)
FROM `customers`
GROUP BY `CITY`

-- покупатель с самым высоким рейтенгом
SELECT `CNUM`,`CNAME`,`CITY`,`RATING`,`SNUM`
FROM `customers`
WHERE
    `RATING` =(
SELECT
    MAX(`RATING`)
FROM
    `customers`
)
GROUP BY `CNAME`

-- найти покупателя с именем оканчивающимся на "s"
SELECT *
FROM `customers`
WHERE `CNAME` LIKE '%s'

-- Найти продавца обслужившего самый большой заказ
SELECT
    SNAME
FROM
    salespeople
WHERE
    SNUM =(
    SELECT
        `SNUM`
    FROM
        orders
    WHERE
        `AMT` =(
    SELECT
        MAX(`AMT`)
    FROM
        orders
    )
)

-- Найти все заказы клиента по имени Grass
SELECT
    *
FROM
    `orders`
WHERE
    CNUM =(
    SELECT
        CNUM
    FROM
        `customers`
    WHERE
        cname = "Grass"
)


