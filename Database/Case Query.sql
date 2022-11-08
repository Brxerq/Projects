1. CASE

	SELECT 
	c.categ_name AS CategoryName, c.categ_type AS CategoryType, i.ite_remaining AS NumberOfItem 
	FROM 
	Category c 
	INNER JOIN Items i ON c.categ_id=i.categ_id
	GROUP BY 
	c.categ_name, c.categ_type;


	
2. CASE

	SELECT 
	s.sto_name AS StockName, o.o_name AS OutletName, s.sto_remaining AS NumberOfAvailable 
	FROM 
	Stock s
	INNER JOIN Outlet o ON s.o_id = o.o_id
	WHERE 
	s.sto_available = true
	GROUP BY 
	s.sto_name, o.o_name;


3. CASE

	SELECT 
	s.sto_name AS StockName, o.o_name AS OutletName, s.sto_disposed AS NumberOfSoldStock
	FROM 
	Stock s
	INNER JOIN Outlet o ON s.o_id = o.o_id
	WHERE 
	s.sto_sold = true
	GROUP BY 
	s.sto_name, o.o_name;

	

4. CASE

	SELECT 
	c.cust_name AS CustomerName, c.cust_address AS CustomerAddress, c.cust_city AS CustomerCityn, p.purc_details AS PurchaseDeatils, i.ite_name AS ItemName, ite_color AS ItemColor
	FROM 
	Customer c
	INNER JOIN Purchase p ON p.cust_id = c.cust_id
	INNER JOIN Items i ON i.ite_id = p.ite_id;


5. CASE


	SELECT 
	c.cust_name AS CustomerName, c.cust_address AS CustomerAddress, c.cust_city AS CustomerCityn, p.purc_details AS PurchaseDeatils, p.purc_currency AS Currency, py.pay_type AS PaymentType, py.pay_name AS PaymentType
	FROM 
	Customer c
	INNER JOIN Purchase p ON p.cust_id = c.cust_id
	INNER JOIN Payment py ON py.purc_id = p.purc_id;

	
6. CASE

	SELECT 
	om.om_name AS OutletManager, om.om_phoneno AS PhoneNumber, p.purc_details AS PurchaseDetail, p.cust_id AS CustomerID
	FROM	
	Purchase p
	INNER JOIN Outlet_Manager om ON om.om_id=p.om_id;

	
7. CASE

	SELECT 
	om.om_name AS OutletManager, om.om_phoneno AS PhoneNumber, om.om_dob AS DateOfBirth, om.om_address AS Address, om.om_city AS City
	FROM	
	Outlet_Manager om
	WHERE 
	YEAR(om.om_datejoined) = YEAR(NOW());


8. CASE

	SELECT 
	om.om_name AS OutletManager, om.om_phoneno AS PhoneNumber, om.om_dob AS DateOfBirth, om.om_address AS Address, om.om_city AS City
	FROM	
	Outlet_Manager om
	INNER JOIN Outlet o ON o.om_id = om.om_id
	WHERE 
	om.om_city = 'Islamabad';

	

9. CASE

	SELECT 
	om.om_name AS OutletManager, om.om_phoneno AS PhoneNumber, om.om_dob AS DateOfBirth, om.om_address AS Address, om.om_city AS City, ro.reso_name AS RestockName, ro.reso_type AS RestockType, ws.wars_name AS WarehouseName, ws.wars_address AS WarehouseAddress, ws.wars_city WarehouseCity
	FROM
	Outlet_Manager om    
	INNER JOIN Restock_Order ro ON ro.om_id = om.om_id
	INNER JOIN Warehouse_Stock ws ON ws.reso_id = ro.reso_id;


10. CASE

	SELECT 
	c.cust_name AS CustomerName, c.cust_dob AS CustomerDateOfBirth, c.cust_phoneno AS CustomerPhone, c.cust_address AS CustomerAddress, c.cust_city AS CustomerCity
	FROM	
	Customer c
	WHERE 
	DATE_FORMAT((c.cust_dob),'%m-%d') = DATE_FORMAT(NOW(),'%m-%d');
