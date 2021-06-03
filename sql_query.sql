/*QUERY FOR CREATE DATABASE 


create database thozehut;
use thozehut;


*/

/*Table structure for table `admin`*/

DROP TABLE IF EXISTS admin;
CREATE TABLE admin 
(id int(10) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
fullName varchar(255) NOT NULL,
username varchar(255) NOT NULL,
password varchar(255) NOT NULL);


/*Dumping data for table `admin`*/

INSERT INTO admin (id, fullName, username, password) 
VALUES(4, 'admin', 'admin', 'admin');


/*##create customers table##########*/

DROP TABLE IF EXISTS users;
CREATE TABLE users
(user_id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
first_name varchar(255) NOT NULL,
last_name varchar(255) NOT NULL,
email varchar(255) NOT NULL,
username varchar(255) NOT NULL UNIQUE,
password varchar(255) NOT NULL);



/*##add values to users###############################################################*/

INSERT INTO users
VALUES (0, "saman", "sumanapala", "saman@123.csa", "saman","saman"); 

INSERT INTO users
VALUES (0, "kamal", "kamanapala", "kamal@123.csa",  "kamal","kamal");



/*###create table items#######################################################*/
DROP TABLE IF EXISTS items;
CREATE TABLE items
(item_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
item_name varchar(20) NOT NULL,
category varchar(20),/*foods/drinks/desserts*/
image_src varchar(30),
price int NOT NULL);

/*#################################################################################*/

/*#####add values to items#####################*/
INSERT INTO items
VALUES (0,"Those", "foods","", 300); 

INSERT INTO items
VALUES (0,"Mango Drinks", "drinks","", 300); 

INSERT INTO items
VALUES (0,"Itly", "foods","", 50); 

INSERT INTO items
VALUES (0,"Wade", "foods","", 450); 

INSERT INTO items
VALUES (0,"Ice cream", "desserts","", 50); 

/*###################################################################*/

/*###########create cart table#########################333*/
DROP TABLE IF EXISTS cart;
CREATE TABLE cart
(user_id int NOT NULL ,
item_id int NOT NULL);

/*#############################################*/

/*#####add values to cart#####################*/
INSERT INTO cart
VALUES (1,1); 

INSERT INTO cart
VALUES (1,2); 

/*################*/

/*#############create order table ###############*/
DROP TABLE IF EXISTS orders;
CREATE TABLE orders
(order_id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
ordered_date varchar(20) NOT NULL,
item_id int NOT NULL,
user_id int NOT NULL,
status varchar(20)/*pending or delivered*/
);


