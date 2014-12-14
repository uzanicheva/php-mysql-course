SELECT MAX (`Drugs`.`Price`) AS HighestPrice
FROM `Pharm`.`Drugs`
GROUP BY Price
ORDER BY Price DESC;
