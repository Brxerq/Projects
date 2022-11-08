USE DistinctionTask;

INSERT INTO Outlet_Manager 
	(om_id, om_name, om_dob, om_phoneno, om_address, om_datejoined, om_city) 
VALUES
	(1,'Umar', '1991-01-01', '01111111111', '21/91 Lane-1, House-10', '2010-01-15', 'Islamabad'),
	(2,'Waqar', '1992-02-02', '02222222222', '22/92 Lane-2, House-9', '2011-02-15', 'Karachi'),
	(3,'Ahmed', '1993-03-03', '03333333333', '23/93 Lane-3, House-8', '2012-03-15', 'Islamabad'),
	(4,'Zaeem', '1994-04-04', '04444444444', '24/94 Lane-4, House-7', '2022-06-02', 'Karachi'),
	(5,'Sara', '1995-05-05', '05555555555', '25/95 Lane-5, House-6', '2014-05-15', 'Lahore'),
	(6,'Sana', '1996-06-06', '06666666666', '26/96 Lane-6, House-5', '2015-06-15', 'Islamabad'),
	(7,'Zohaib', '1997-07-07', '07777777777', '27/97 Lane-7, House-4', '2016-07-15', 'Karachi'),
	(8,'Zain', '1998-08-08', '08888888888', '28/98 Lane-8, House-3', '2017-08-15', 'Lahore'),
	(9,'Haris', '1999-09-09', '09999999999', '29/99 Lane-9, House-2', '2022-09-15', 'Islamabad'),
	(10,'Farukh', '2000-10-10', '01000000000', '20/100 Lane-10, House-1', '2020-07-08', 'Lahore');



INSERT INTO Restock_Order 
	(reso_id, reso_name, reso_type, om_id) 
VALUES
	(1,'StockNo-001', 'Perfume', 1),
	(2,'StockNo-002', 'Perfume', 2),
	(3,'StockNo-003', 'Perfume', 3),
	(4,'StockNo-004', 'Clothes', 4),
	(5,'StockNo-005', 'Clothes', 5),
	(6,'StockNo-006', 'Ladies Clothes', 6),
	(7,'StockNo-007', 'Shirt', 7),
	(8,'StockNo-008', 'Perfume', 8),
	(9,'StockNo-009', 'Jeans', 9),
	(10,'StockNo-010', 'Perfume', 10);



INSERT INTO Warehouse_Stock 
	(wars_id, wars_name, wars_address, wars_city, reso_id) 
VALUES
	(1,'South Point', 'Shop # 19, Gulshan-e-Ravi', 'Islamabad', 1),
	(2,'East Point', '6/7 House -53', 'Islamabad', 2),
	(3,'Defense', 'Danapur Road, G.O.R.-1', 'Lahore', 3),
	(4,'Bahria Town', '4-Data Market', 'Lahore', 4),
	(5,'Bahria Town', 'C.P.& Barar Society Amir Khusro Rd.Dhoraji Colony', 'Karachi', 5),
	(6,'DHA', 'Main Clifton Road', 'Karachi', 6),
	(7,'Lakshmi Chowk', 'Shahrah-e-Fatima Jinnah', 'Lahore', 7),
	(8,'South Point', '6/112 Rangpura Peer House', 'Islamabad', 8),
	(9,'Saddar', 'Zainab Mkt., Nr. Khyber Pull', 'Karachi', 9),
	(10,'East Point', 'Glamour One', 'Islamabad', 10);


INSERT INTO Outlet
	(o_id, o_name, o_phoneno, o_address, o_zipcode, o_city, o_areacode, om_id) 
VALUES
	(1,'J. DolmenMall', '09111111111', 'Shop-1', '12345','Islamabad', '9411', 1),
	(2,'J. Centrus', '09222222222', 'Shop-2', '22345','Islamabad', '9422', 2),
	(3,'J. The Palace', '09333333333', 'Shop-3', '32345','Lahore', '9433', 3),
	(4,'J. DHA', '09444444444', 'Shop-4', '42345','Lahore', '9444', 4),
	(5,'J. Saddar', '09555555555', 'Shop-5', '52345','Karachi', '9455', 5),
	(6,'J. Ocean Mall', '09666666666', 'Shop-6', '62345','Karachi', '9466', 6),
	(7,'J. LuckyOne', '09777777777', 'Shop-7', '72345','Lahore', '9477', 7),
	(8,'J. Atrium', '09888888888', 'Shop-8', '82345','Islamabad', '9488', 8),
	(9,'J. Zoom', '09999999999', 'Shop-9', '92345','Karachi', '9499', 9),	
	(10,'J. MegaMall', '09000000000', 'Shop-10', '10234','Islamabad', '9410', 10);


INSERT INTO Stock
	(sto_id, sto_name, sto_available, sto_sold, sto_remaining, sto_disposed, sto_arrivaldate, o_id) 
VALUES
	(1,'Stock Clothes-1', true, false,50,0, '2022-01-10', 1),
	(2,'Stock Perfume-1', true, false,50,0, '2022-02-09', 2),
	(3,'Stock Clothes-2', false, true,0,50, '2022-03-08', 3),
	(4,'Stock Perfume-2', true, false,50,0, '2022-04-07', 4),
	(5,'Stock Clothes-3', true, true,25,25, '2022-05-06', 5),
	(6,'Stock Perfume-3', true, false,50,0, '2022-06-05', 6),
	(7,'Stock Clothes-4', true, false,50,0, '2022-07-04', 7),
	(8,'Stock Perfume-4', false, true,0,50, '2022-08-03', 8),
	(9,'Stock Clothes-5', true, false,50,50, '2022-09-02', 9),
	(10,'Stock Perfume-5', false, true,0,50, '2022-10-01', 10);

  
INSERT INTO Category
	(categ_id, categ_name, categ_type, sto_id) 
VALUES
	(1, 'Cat-001-Core', 'Clothes', 1),
	(2, 'Cat-002-Musk', 'Perfume', 2),
	(3, 'Cat-003-Heaven', 'Clothes', 3),
	(4, 'Cat-004-Khaddi', 'Perfume', 4),
	(5, 'Cat-005-Cotton', 'Clothes', 5),
	(6, 'Cat-006-Special', 'Perfume', 6),
	(7, 'Cat-007-Polo', 'Clothes', 7),
	(8, 'Cat-008-Empress', 'Clothes', 8),
	(9, 'Cat-009-Denim', 'Perfume', 9),	
	(10, 'Cat-010-Medusa', 'Perfume', 10);


INSERT INTO Items
	(ite_id, ite_name, ite_color,ite_remaining, categ_id) 
VALUES
	(1,'J. Core', 'Purple',10, 1),
	(2,'J. Musk', 'White',20, 2),
	(3,'J. Heaven', 'Blue',30, 3),
	(4,'J. Khaddi', 'Brown',40, 4),
	(5,'J. Cotton', 'White',50, 5),
	(6,'J. Special', 'Green',40, 6),
	(7,'J. Polo', 'Black',30, 7),
	(8,'J. Empress', 'Yellow',20, 8),
	(9,'J.Denim', 'Blue',10, 9),
	(10,'J. Medusa', 'Green',05, 10);


INSERT INTO Purchase
	(purc_id, purc_details, purc_currency,cust_id, ite_id, om_id) 
VALUES
	(1, 'Outlet', 'PKR', 1,1,1),
	(2, 'Outlet', 'PKR', 2,2,2),
	(3, 'Outlet', 'PKR', 3,3,3),
	(4, 'Outlet', 'PKR', 4,4,4),
	(5, 'Online', 'USD', 5,5,5),
	(6, 'Not specified', 'PKR', 6,6,6),
	(7, 'Online', 'AED', 7,7,7),
	(8, 'Outlet', 'PKR', 8,8,8),
	(9, 'Outlet', 'PKR', 9,9,9),
	(10, 'Outlet', 'PKR', 10,10,10);


INSERT INTO Customer
	(cust_id, cust_name, cust_dob, cust_phoneno, cust_address, cust_city, purc_id) 
VALUES
	(1, 'Azam', '1992-1-10', '01234567891', '01 North Town', 'Islamabad', 1),
	(2, 'Zaid', '1993-2-9', '09876543212', '02 South Town', 'Karachi', 2),
	(3, 'Sana', '1994-3-8', '09876543213', '03 East Town', 'Islamabad', 3),
	(4, 'Ahmed', '1995-4-7', '09876543214', '04 West Town', 'Karachi', 4),
	(5, 'Ibraheem', '1996-06-02', '09876543215', '05 West Town', 'Lahore', 5),
	(6, 'Hassaan', '1997-6-5', '09876543216', '06 South Town', 'Islamabad', 6),
	(7, 'Osama', '1998-7-4', '09876543217', '07 East Town', 'Karachi', 7),
	(8, 'Abdullah', '1999-8-3', '09876543218', '08 North Town', 'Lahore', 8),
	(9, 'Huzaifa', '2000-9-2', '09876543219', '09 West Town', 'Islamabad', 9),
	(10, 'Khalid', '2001-06-02', '09876543100', '10 East View', 'Karachi', 10);
	

INSERT INTO Payment
	(pay_id, pay_name, pay_type, purc_id) 
VALUES
	(1,'HBL', 'Card',  1),
	(2,'JazzCash', 'Mobile',  2),
	(3,'Haroon', 'Cash',  3),
	(4,'JazzCash', 'Mobile',  4),
	(5,'Meezan Bank', 'Card',  5),
	(6,'Sadapay', 'Mobile',  6),
	(7,'Standard Charted', 'Card',  7),
	(8,'Nayapay', 'Cash',  8),
	(9,'JazzCash', 'Mobile',  9),
	(10,'EasyPaisa', 'Mobile', 10);  
