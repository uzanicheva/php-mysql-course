(
SELECT Name, Surname, Age, Gender, IDNumber, Phone
FROM Pharmacy.Employees
WHERE Age > 30
)
UNION

(
SELECT Name, Surname, Age, Gender, IDNumber, Phone
FROM Pharm.Employees
WHERE Age < 50
)
ORDER BY Name
