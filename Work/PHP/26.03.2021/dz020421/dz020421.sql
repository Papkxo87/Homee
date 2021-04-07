SELECT ' For ', odate, ', there are ',
COUNT ( DISTINCT onum ), 'orders.'
FROM Orders
GROUP BY odate;