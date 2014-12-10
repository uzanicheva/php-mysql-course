CREATE TABLE CompShop (
	CompShopID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(100) NOT NULL,
	Created TIMESTAMP DEFAULT NOW()
)DEFAULT COLLATE utf8_unicode_ci ;

CREATE TABLE Brands (
	BrandID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(100) NOT NULL,
	INDEX brand_id (BrandID),
	FOREIGN KEY (BrandID) 
        REFERENCES CompShop(ComputerShopID)
        ON DELETE CASCADE
)DEFAULT COLLATE utf8_unicode_ci;

CREATE TABLE Models (
	ModelID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Name VARCHAR(100) NOT NULL,
	INDEX model_id (ModelID),
	FOREIGN KEY (ModelID) 
        REFERENCES Brands (BrandsID)
        ON DELETE CASCADE
)DEFAULT COLLATE utf8_unicode_ci;

CREATE TABLE Prices (
	PriceID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Name INT NOT NULL,
	INDEX price_id (PriceID),
	FOREIGN KEY (PriceID) 
        REFERENCES Models(ModelID)
        ON DELETE CASCADE
)DEFAULT COLLATE utf8_unicode_ci;
