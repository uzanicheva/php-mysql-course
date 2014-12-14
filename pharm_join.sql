SELECT one.PharmacyID, one.Name, one.Address, two.EmployeeID, two.Name, two.Surname, two.Age, two.Gender, two.IDNumber, two.Phone, three.DrugID, three.ExpDate, three.Distributor, three. Price , three.Quantity 
FROM Pharm.Pharmacies AS one
JOIN Pharm.Employees AS two ON two.PharmacyID = three.PharmacyID
JOIN Pharm.Drugs AS three ON three.PharmacyID = two.PharmacyID
