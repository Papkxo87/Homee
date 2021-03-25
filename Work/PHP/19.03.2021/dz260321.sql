-- Вывести заказы всех клиентов из Рима и Берлина
SELECT
    *
FROM
    `orders`
WHERE
    CNUM IN(
    SELECT
        CNUM
    FROM
        `customers`
    WHERE
        CITY = "Rome" or CITY ="Berlin"
)

-- Средний размер комиссионных в каждом городе, кроме Нью-Йорка
SELECT
     `SNUM`,`SNAME`,`CITY`,
    AVG(`COMM`)
FROM
    salespeople
    WHERE `CITY` != "New York"
    GROUP BY `CITY`