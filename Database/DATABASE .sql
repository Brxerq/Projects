
CREATE DATABASE DistinctionTask;
USE DistinctionTask;


CREATE TABLE Outlet_Manager(
	om_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	om_name VARCHAR(255) NOT NULL,
	om_dob DATE NULL,
	om_phoneno VARCHAR(255) NULL,
	om_address VARCHAR(255) NULL,
	om_datejoined DATE NULL,
	om_city VARCHAR(255) NULL	
);



CREATE TABLE Restock_Order(
	reso_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	reso_name VARCHAR(255) NOT NULL,
	reso_type VARCHAR(255) NOT NULL,	
	om_id INT UNSIGNED NOT NULL,
	FOREIGN KEY(om_id) REFERENCES Outlet_Manager(om_id)
);



CREATE TABLE Warehouse_Stock(
	wars_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	wars_name VARCHAR(255) NOT NULL,
	wars_address VARCHAR(255) NOT NULL,
	wars_city VARCHAR(255) NOT NULL,
	reso_id INT UNSIGNED NOT NULL,
	FOREIGN KEY(reso_id) REFERENCES Restock_Order(reso_id)
);



CREATE TABLE Outlet(
	o_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	o_name VARCHAR(255) NOT NULL,
	o_phoneno VARCHAR(255) NOT NULL,
	o_address VARCHAR(255) NOT NULL,
	o_zipcode VARCHAR(255) NOT NULL,
	o_city VARCHAR(255) NOT NULL,
	o_areacode VARCHAR(255) NOT NULL,
	om_id INT UNSIGNED NOT NULL,
	FOREIGN KEY(om_id) REFERENCES Outlet_Manager(om_id)
);



CREATE TABLE Stock(
	sto_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	sto_name VARCHAR(255) NOT NULL,
	sto_available BIT NOT NULL,
	sto_sold BIT NOT NULL,
	sto_remaining INT NOT NULL,
	sto_disposed INT NOT NULL,
	sto_arrivaldate DATETIME NOT NULL,
	o_id INT UNSIGNED NOT NULL,
	FOREIGN KEY(o_id) REFERENCES Outlet(o_id)
);



CREATE TABLE Category(
	categ_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	categ_name VARCHAR(255) NOT NULL,
	categ_type VARCHAR(255) NOT NULL,
	sto_id INT UNSIGNED NOT NULL,
	FOREIGN KEY(sto_id) REFERENCES Stock(sto_id)
);



CREATE TABLE Items(
	ite_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	ite_name VARCHAR(255) NOT NULL,
	ite_color VARCHAR(255) NOT NULL,
	ite_remaining INT NOT NULL,
	categ_id INT UNSIGNED NOT NULL,
	FOREIGN KEY(categ_id) REFERENCES Category(categ_id)
);



CREATE TABLE Purchase(
	purc_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	purc_details VARCHAR(255) NOT NULL,
	purc_currency VARCHAR(255) NOT NULL,
	cust_id INT UNSIGNED NOT NULL,
	ite_id INT UNSIGNED NOT NULL,
	om_id INT UNSIGNED NOT NULL,
	FOREIGN KEY(ite_id) REFERENCES Items(ite_id),
	FOREIGN KEY(om_id) REFERENCES Outlet_Manager(om_id)
);



CREATE TABLE Customer(
	cust_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	cust_name VARCHAR(255) NOT NULL,
	cust_dob DATE NULL,
	cust_phoneno VARCHAR(255) NOT NULL,
	cust_address VARCHAR(255) NOT NULL,	
	cust_city VARCHAR(255) NOT NULL,
	purc_id INT UNSIGNED NOT NULL,	
	FOREIGN KEY(purc_id) REFERENCES Purchase(purc_id)
);


CREATE TABLE Payment(
	pay_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	pay_name VARCHAR(255) NOT NULL,
	pay_type VARCHAR(255) NOT NULL,
	purc_id INT UNSIGNED NOT NULL,	
	FOREIGN KEY(purc_id) REFERENCES Purchase(purc_id)
);

