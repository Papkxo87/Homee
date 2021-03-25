-- Найти продавцов, которые обслуживали заказы 10/06/1990(edited)
SELECT DISTINCT
    `salespeople`.SNAME
FROM
    `orders`,
    `salespeople`
WHERE
    orders.SNUM = salespeople.SNUM AND ODATE = "1990-06-10"

-- Подсчитать количество продавцов, которые работали с клиентами с самым низким рейтингом
SELECT
    COUNT(DISTINCT `salespeople`.SNAME)
FROM
    `orders`,
    `customers`,
    `salespeople`
WHERE
    orders.CNUM = customers.CNUM AND orders.SNUM = salespeople.SNUM AND rating =(
    SELECT
        MIN(`RATING`)
    FROM
        `customers`
)

-- Найти города, в которых больше двух клиентов
SELECT
    `customers`.CITY
FROM
    `customers`
GROUP BY `CITY`
HAVING COUNT(CNUM) > 1

-- Найти города, сумма заказов из которых больше, чем средняя сумма заказов за 10/03/1990
    SELECT
    CITY,
    SUM(AMT)
FROM
    `orders`,
    `customers`
WHERE
    `orders`.`CNUM` = `customers`.`CNUM`
GROUP BY
    `customers`.`CITY`
HAVING
    SUM(AMT) >(
    SELECT
        AVG(AMT)
    FROM
        `orders`,
        `customers`
    WHERE
        `orders`.`CNUM` = `customers`.`CNUM` AND `ODATE` = "1990-03-10"
    GROUP BY
        `ODATE`
)