<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <?php
      // Example 01
      
      SELECT * FROM Customers;
      
      // Example 02

      SELECT CustomerName, City, Country FROM Customers;

      // Example 03

      SELECT * FROM Customers;

      // Example 04

      SELECT DISTINCT column1, column2, ...
      FROM table_name;

      // Example 05

      SELECT Country FROM Customers;

      // Example 06

      SELECT DISTINCT Country FROM Customers;

      // Example 07

      SELECT COUNT(DISTINCT Country) FROM Customers;

      // Example 08

      SELECT column1, column2, ...
      FROM table_name
      WHERE condition;

      // Example 09

      SELECT * FROM Customers
      WHERE Country = 'Mexico';

      // Example 10

      SELECT * FROM Customers
      WHERE CustomerID = 1;

      // Example 11

      SELECT column1, column2, ...
      FROM table_name
      WHERE condition1 AND condition2 AND condition3 ...;

      // Example 12

      SELECT column1, column2, ...
      FROM table_name
      WHERE condition1 OR condition2 OR condition3 ...;

      // Example 13

      SELECT column1, column2, ...
      FROM table_name
      WHERE NOT condition;

      // Example 14

      SELECT * FROM Customers
      WHERE Country = 'Germany' AND City = 'Berlin';      

      // Example 15

      SELECT * FROM Customers
      WHERE City = 'Berlin' OR City = 'Stuttgart';

      // Example 16

      SELECT * FROM Customers
      WHERE Country = 'Germany' OR Country = 'Spain';

      // Example 17

      SELECT * FROM Customers
      WHERE NOT Country = 'Germany';

      // Example 18

      SELECT * FROM Customers
      WHERE Country = 'Germany' AND (City = 'Berlin' OR City = 'Stuttgart');

      // Example 19

      SELECT * FROM Customers
      WHERE NOT Country = 'Germany' AND NOT Country = 'USA';

      // Example 20

      SELECT * FROM Customers
      ORDER BY Country;

      // Example 21

      SELECT * FROM Customers
      ORDER BY Country DESC;

      // Example 22

      SELECT * FROM Customers
      ORDER BY Country, CustomerName;

      // Example 23

      SELECT * FROM Customers
      ORDER BY Country ASC, CustomerName DESC;

      // Example 24

      INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
      VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');

      // Example 25

      INSERT INTO Customers (CustomerName, City, Country)
      VALUES ('Cardinal', 'Stavanger', 'Norway');

      // Example 26

      SELECT CustomerName, ContactName, Address
      FROM Customers
      WHERE Address IS NULL;

      // Example 27

      SELECT CustomerName, ContactName, Address
      FROM Customers
      WHERE Address IS NOT NULL;

      // Example 28

      UPDATE Customers
      SET ContactName = 'Alfred Schmidt', City = 'Frankfurt'
      WHERE CustomerID = 1;

      // Example 29

      UPDATE Customers
      SET PostalCode = 00000
      WHERE Country = 'Mexico';

      // Example 30

      DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste';

      // Example 31

      DELETE FROM Customers;

      // Example 32

      SELECT * FROM Customers
      LIMIT 3;

      // Example 33

      SELECT * FROM Customers
      LIMIT 3 OFFSET 3;

      // Example 34

      SELECT * FROM Customers
      WHERE Country='Germany'
      LIMIT 3;

      // Example 35

      SELECT MIN(Price) AS SmallestPrice
      FROM Products;

      // Example 36

      SELECT MAX(Price) AS LargestPrice
      FROM Products;

      // Example 37

      SELECT COUNT(ProductID)
      FROM Products;

      // Example 38

      SELECT AVG(Price)
      FROM Products;

      // Example 39

      SELECT SUM(Quantity)
      FROM OrderDetails;

      // Example 40

      SELECT * FROM Customers
      WHERE CustomerName LIKE 'a%';

      // Example 41

      SELECT * FROM Customers
      WHERE CustomerName LIKE '%a';

      // Example 42

      SELECT * FROM Customers
      WHERE City LIKE 'ber%';

      // Example 43

      SELECT * FROM Customers
      WHERE City LIKE '%es%';

      // Example 44

      SELECT * FROM Customers
      WHERE Country IN ('Germany', 'France', 'UK');

      // Example 45

      SELECT * FROM Customers
      WHERE Country NOT IN ('Germany', 'France', 'UK');

      // Example 46

      SELECT * FROM Products
      WHERE Price BETWEEN 10 AND 20;

      // Example 47

      SELECT * FROM Products
      WHERE Price NOT BETWEEN 10 AND 20;

      // Example 48

      SELECT CustomerID AS ID, CustomerName AS Customer
      FROM Customers;

      // Example 49

      SELECT CustomerName AS Customer, ContactName AS "Contact Person"
      FROM Customers;

      // Example 50

      SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
      FROM Orders
      INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;

    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>