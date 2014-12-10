ALTER TABLE Brands RENAME Producers;

ALTER TABLE Models ADD Number INT NULL;

UPDATE Prices SET Price=NULL;  

UPDATE Prices SET Price=1000,  
WHERE Price=700;
